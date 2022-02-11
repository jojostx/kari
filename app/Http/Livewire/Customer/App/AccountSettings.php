<?php

namespace App\Http\Livewire\Customer\App;

use App\Models\PendingUserPhoneNumber;
use App\Models\State;
use App\Models\User;
use App\Models\UserAddress;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class AccountSettings extends Component implements HasForms
{
    use InteractsWithForms;

    public User $authUser;

    public $savedPersonalInfo = false;
    public $savedContactInfo = false;
    public $savedPasswordInfo = false;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $birthdate;

    public $email;
    public $phone_number;
    public $state;
    public $city;
    public $address;
    public $postcode;

    public $current_password;
    public $new_password;
    public $new_password_confirmation;

    public function mount()
    {
        $this->authUser = auth()->user();

        $this->personalInfoForm->fill([
            'first_name' => $this->authUser->first_name,
            'middle_name' => $this->authUser->middle_name,
            'last_name' => $this->authUser->last_name,
            'birthdate' => $this->authUser->birthdate,
        ]);

        $this->contactInfoForm->fill([
            'email' => $this->authUser->email,
            'phone_number' => $this->authUser->phone_number,
            'state' => $this->authUser->location?->state?->id,
            'city' => $this->authUser->location?->city?->id,
            'postcode' => $this->authUser->location?->postcode,
            'address' => $this->authUser->location?->address
        ]);

        $this->passwordInfoForm->fill([
            'current_password' => '',
            'new_password' => '',
            'new_password_confirmation' => ''
        ]);
    }

    protected function getPersonalInfoFormSchema(): array
    {
        return [
            Grid::make([
                'default' => 1,
                'md' => 2,
            ])
                ->schema([
                    TextInput::make('first_name')->label('First Name')->required()->columnSpan(
                        [
                            'md' => 1,
                        ]
                    ),
                    TextInput::make('middle_name')->label('Middle Name')->required()->columnSpan(
                        [
                            'md' => 1,
                        ]
                    ),
                    TextInput::make('last_name')->label('Last Name')->required()->columnSpan(
                        [
                            'md' => 1,
                        ]
                    ),
                    DatePicker::make('birthdate')->label('Birthdate')->reactive(),
                ]),
        ];
    }

    protected function getContactInfoFormSchema(): array
    {
        return [
            Grid::make([
                'default' => 1,
                'md' => 2,
            ])
                ->schema([
                    TextInput::make('email')->label('Email Address')->required()->columnSpan(
                        [
                            'md' => 1,
                        ]
                    ),

                    TextInput::make('phone_number')->label('Phone Number')->rules(['unique:users,phone_number'])->required(),

                    Select::make('state_id')
                        ->label('State')
                        ->searchable()
                        ->getSearchResultsUsing(fn (string $query) => State::where('name', 'like', "%{$query}%")->limit(50)->pluck('name', 'id'))
                        ->reactive()
                        ->afterStateUpdated(fn (callable $set) => $set('city_id', null)),

                    Select::make('city_id')
                        ->label('City')
                        ->options(function (callable $get) {
                            $selectedState = State::find($get('state_id'));

                            if ($selectedState) {
                                return $selectedState->cities->pluck('name', 'id');
                            }

                            return [];
                        }),

                    TextInput::make('location.address')
                        ->label('Address')->rules(['between:5,255', 'string'])->reactive(),

                    TextInput::make('location.postcode')
                        ->label('Zip/Postcode')->rules(['max:7', 'string'])->reactive()
                ]),
        ];
    }

    protected function getPasswordInfoFormSchema(): array
    {
        return [
            Grid::make([
                'default' => 1,
                'md' => 2,
            ])->schema([
                TextInput::make('current_password')
                    ->label('Current Password')
                    ->password()
                    ->rules(['required_with:new_password'])
                    ->currentPassword()
                    ->autocomplete('off')
                    ->columnSpan(1),
                Grid::make()
                    ->schema([
                        TextInput::make('new_password')
                            ->label('New Password')
                            ->password()
                            ->rules(['confirmed'])
                            ->autocomplete('new-password'),
                        TextInput::make('new_password_confirmation')
                            ->label('Confirm Password')
                            ->password()
                            ->rules([
                                'required_with:new_password',
                            ])
                            ->dehydrated(false)
                            ->autocomplete('new-password'),
                    ]),
            ]),
        ];
    }

    protected function getForms(): array
    {
        return [
            'personalInfoForm' => $this->makeForm()
                ->schema($this->getPersonalInfoFormSchema())
                ->model($this->authUser),

            'contactInfoForm' => $this->makeForm()
                ->schema($this->getContactInfoFormSchema())
                ->model($this->authUser),

            'passwordInfoForm' => $this->makeForm()
                ->schema($this->getPasswordInfoFormSchema())
                ->model($this->authUser),
        ];
    }

    public function savePersonalInfo(): void
    {
        $saved = $this->authUser->fill($this->personalInfoForm->getState())->save();

        if ($saved) {
            $this->savedPersonalInfo = true;
        }
    }

    public function saveContactInfo(): void
    {
        (new PendingUserPhoneNumber())->newPhoneNumber($this->authUser, $this->contactInfoForm->getState()['phone_number']);

        $this->authUser->newEmail($this->contactInfoForm->getState()['email']);

        UserAddress::where('user_id', $this->authUser->id)->delete();

        $location = $this->authUser->location()->updateOrCreate([
            'state_id' => $this->contactInfoForm->getState()['state_id'],
            'city_id' => $this->contactInfoForm->getState()['city_id'],
            'address' => $this->contactInfoForm->getState()['location']['address'],
            'postcode' => $this->contactInfoForm->getState()['location']['postcode'],
        ]);

        if ($location) {
            $this->savedContactInfo = true;
        }
    }

    public function savePasswordInfo(): void
    {
        $status =  $this->authUser->forceFill([
            'password' => Hash::make($this->passwordInfoForm->getState()['new_password']),
            'remember_token' => Str::random(60),
        ])->save();

        if ($status) {
            event(new PasswordReset($this->authUser));

            $this->savedPasswordInfo = true;
        }
    }

    public function render()
    {
        return view('livewire.customer.app.account-settings');
    }
}
