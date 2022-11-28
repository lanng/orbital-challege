<?php
namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AccessFromGuestAndAuthenticateUserTest extends TestCase
{
    public function testIfGuestCantAccessProtectedRoute()
    {
        $response = $this->withHeader('Accept', 'application/json')->get('/api/v1/products');

        $response->assertUnauthorized();
    }
}
