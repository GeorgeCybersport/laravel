<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get(route('categories'));

        $response->assertOk();

    }

    public function test_single()
    {
        $response = $this->get(route('categories')."/1");

        $response->assertOk();
    }

}
