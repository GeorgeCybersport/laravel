<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrdersTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get(route('orders'));

        $response->assertOk();
    }
    public function test_store()
    {
        $data=[
            'name' => 'Taylor Otwell',
            'email' => 'taylor@example.com,',
            'phone' => '1235456',
            'info' => "fgeusyhfuiehgfuihesigujgrjdhngrdghreoig"
        ];
        $response = $this->post(route('orders.store'), $data);

        $response->assertRedirect(route("orders"));
    }

    public function test_create()
    {
        $response = $this->get(route('orders.create'));

        $response->assertOk();
    }
}
