<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the registration page loads correctly.
     */
    public function test_registration_page_loads_correctly()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertSee('Register for Archeotrails');
    }

    /**
     * Test that a user can register successfully.
     */
    public function test_user_can_register_successfully()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'role' => 'user',
        ]);

        $response->assertRedirect('/');
        $this->assertDatabaseHas('users', [
            'email' => 'testuser@example.com',
        ]);
    }

    /**
     * Test that validation errors are displayed for missing fields.
     */
    public function test_validation_errors_for_missing_fields()
    {
        $response = $this->post('/register', [
            'name' => '',
            'email' => '',
            'password' => '',
            'password_confirmation' => '',
            'role' => 'user',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }

    /**
     * Test that validation errors are displayed for invalid email.
     */
    public function test_validation_errors_for_invalid_email()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'invalid-email',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'role' => 'user',
        ]);

        $response->assertSessionHasErrors(['email']);
    }

    /**
     * Test that validation errors are displayed for password mismatch.
     */
    public function test_validation_errors_for_password_mismatch()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password456',
            'role' => 'user',
        ]);

        $response->assertSessionHasErrors(['password']);
    }

    /**
     * Test that an error message is displayed for already registered email.
     */
    public function test_error_message_for_already_registered_email()
    {
        // Create a user with the same email
        \App\Models\User::create([
            'name' => 'Existing User',
            'email' => 'existinguser@example.com',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'existinguser@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'role' => 'user',
        ]);

        $response->assertSessionHasErrors(['email']);
    }
}