<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_users_list(): void
    {
        $response = $this->get('/users');
        $response->assertStatus(404);
    }

    public function test_authenticated_user_can_access_users_list(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/users');
        $response->assertStatus(200);
        $response->assertSeeText('Daftar Pengguna');
    }

    public function test_guest_cannot_delete_user(): void
    {
        $userToDelete = User::factory()->create();

        $response = $this->get('/users/' . $userToDelete->id . '/delete');
        
        $response->assertStatus(404);
        $this->assertDatabaseHas('users', ['id' => $userToDelete->id]);
    }

    public function test_authenticated_user_can_delete_other_user(): void
    {
        $currentUser = User::factory()->create();
        $this->actingAs($currentUser);

        $userToDelete = User::factory()->create();

        $response = $this->get('/users/' . $userToDelete->id . '/delete');

        $response->assertRedirect('/users');
        $this->assertDatabaseMissing('users', ['id' => $userToDelete->id]);
    }

    public function test_authenticated_user_cannot_delete_themselves(): void
    {
        $currentUser = User::factory()->create();
        $this->actingAs($currentUser);

        $response = $this->get('/users/' . $currentUser->id . '/delete');

        $response->assertSessionHasErrors('error');
        $this->assertDatabaseHas('users', ['id' => $currentUser->id]);
    }
}
