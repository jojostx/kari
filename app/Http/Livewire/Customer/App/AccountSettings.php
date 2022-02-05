<?php

namespace App\Http\Livewire\Customer\App;

use App\Models\City;
use App\Models\State;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
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
    public $password_confirmation;

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
            'state' => $this->authUser->location?->state,
            'city' => $this->authUser->location?->city,
            'postcode' => $this->authUser->location?->postcode,
            'address' => $this->authUser->location?->address
        ]);

        $this->passwordInfoForm->fill([
            'current_password' => '',
            'new_password' => '',
            'password_confirmation' => ''
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

                    TextInput::make('phone_number')->label('Phone Number')->required(),

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
                        ->label('Address'),

                    TextInput::make('location.postcode')
                        ->label('Zip/Postcode')
                ]),
        ];
    }

    protected function getPasswordInfoFormSchema(): array
    {
        return [
            Grid::make([
                'default' => 1,
                'md' => 2,
            ])
                ->schema([
                    TextInput::make('current_password')
                        ->label('Current Password')
                        ->columnSpan(
                            [
                                'md' => 1,
                            ]
                        )
                        ->required(),

                    TextInput::make('new_password')
                        ->label('New Password')
                        ->required(),

                    TextInput::make('password_confirmation')
                        ->label('Confirm Password')
                        ->required()
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
        // $this->authUser->fill([
        //     'email' => $this->personalInfoForm->getState()[''],
        //     'phone_number' => $this->personalInfoForm->getState()[''],
        // ]);

        $location = $this->authUser->location()->create([
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
        \dd($this->passwordInfoForm->getState());
    }


    public function render()
    {
        return view('livewire.customer.app.account-settings');
    }
}
