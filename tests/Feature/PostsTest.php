<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_visit_not_empty_posts_page(): void
    {
        $post = post::create([
            'title' => 'test php',
            'author' => 'php',
        ]);
        $response = $this->get('/posts');
        $response->assertSee(__('title'));
        // $response->assertOk();//200
        // $response->assertAccepted();//202
        // $response->assertNotFound();//404
        // $response->assertBadRequest();//400
        // $response->assertConflict();//409
        // dd($response->status());// to get current status
        // $response->statusText();
        // $response->assertViewHas('posts', function ($item) use($post){
        //     return $item->contains($post);
        // });
    }
}
