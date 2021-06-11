<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReviewsTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get('/reviews');

        $response->assertOk();
    }

    public function test_store()
    {
        $data=[
            'name' => 'Taylor Otwell',
            'comment' => "fgeusyhfuiehgfuihesigujgrjdhngrdghreoig"
        ];
        $response = $this->post(route('reviews.store'), $data);

        $response->assertRedirect(route("reviews"));
    }

    public function test_create()
    {
        $response = $this->get(route("reviews.create"), ["name"=>"123", "comment"=>"123"]);

        $response->assertOk();
    }
}
