<?php

namespace Tests\Feature\Auth;

use App\Http\Livewire\Admin\Auth\Login;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class AdminLogoutTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_admin_can_logout()
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

        $this->get(route('admin.logout'));

        $this->assertGuest();
    }

    public function test_non_admin_cannot_logout()
    {
        $this->assertGuest();

        $this->get(route('admin.logout'))
            ->assertRedirect(route('admin.login'));

        $this->assertGuest();
    }
}
