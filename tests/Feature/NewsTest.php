<?php

namespace Tests\Feature;

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_index()
    {

        $response = $this->get(route('news'));

        $response->assertOk();
    }

    public function test_single()
    {
        $response = $this->get(route('news')."/1");

        $response->assertOk();
    }

    public function test_create()
    {
        $response = $this->get('/news/create');

        $response->assertOk();
    }
}
