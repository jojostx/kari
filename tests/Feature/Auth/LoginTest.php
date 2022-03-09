<?php

namespace Tests\Feature\Auth;

use App\Http\Livewire\Admin\Auth\Login;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    
    function test_login_page_contains_livewire_component()
    {
        $this->get(route('admin.login'))->assertSeeLivewire(Login::class);
    }

    function test_admin_login_page_can_be_rendered()
    {
        $this->get(route('admin.login'))->assertSuccessful();
    }

    function test_can_authenticate()
    {
        $this->assertGuest();

        $userToAuthenticate = User::factory()->admin()->create();

        Livewire::test(Login::class)
            ->set('email', $userToAuthenticate->email)
            ->set('password', 'password')
            ->set('remember', false)
            ->call('authenticate')
            ->assertRedirect(route('admin.dashboard'));

        $this->assertAuthenticatedAs($userToAuthenticate);
    }

    function test_can_redirect_unauthenticated_user_to_login_page()
    {
        $this->get(route('admin.dashboard'))->assertRedirect(route('admin.login'));
    }

    function test_users_can_not_authenticate_with_invalid_email()
    {
        User::factory()->create();

        Livewire::test(Login::class)
            ->set('email', 'invalid-email')
            ->set('password', 'password')
            ->set('remember', false)
            ->call('authenticate')
            ->assertHasErrors(['email']);

        $this->assertGuest();
    }
 
    function test_users_can_not_authenticate_with_invalid_password()
    {
        $userToAuthenticate = User::factory()->create();

        Livewire::test(Login::class)
        ->set('email', $userToAuthenticate->email)
        ->set('password', 'incorrect-password')
        ->set('remember', false)
        ->call('authenticate')
        ->assertHasErrors(['email']);
        
        $this->assertGuest();
    }

    function test_can_validate_email_is_required()
    {
        Livewire::test(Login::class)
                ->assertSet('email', '')
                ->set('remember', false)
                ->call('authenticate')
                ->assertHasErrors(['email' => 'required']);
    }

    function test_can_validate_password_is_required()
    {
        Livewire::test(Login::class)
                ->assertSet('password', '')
                ->set('remember', false)
                ->call('authenticate')
                ->assertHasErrors(['password' => 'required']);
    }

    public function test_can_throttle_authentication_attempts()
    {
        $this->assertGuest();

        $userToAuthenticate = User::factory()->admin()->create();

        foreach (range(1, 5) as $i) {
            Livewire::test(Login::class)
                ->set('email', $userToAuthenticate->email)
                ->set('remember', false)
                ->set('password', 'password')
                ->call('authenticate');

            $this->assertAuthenticated();

            auth()->logout();
        }

        Livewire::test(Login::class)
            ->set('email', $userToAuthenticate->email)
            ->set('remember', false)
            ->set('password', 'password')
            ->call('authenticate');

        $this->assertGuest();
    }
}
