<?php

use App\Models\Admin;
use App\Models\Problem;
use App\Models\Tag;
use App\Models\Topic;


test('problem page is displayed', function () {

    $admin = Admin::factory()->create();

    $response = $this
        ->actingAs($admin, 'admin')
        ->get('/admin/problems');

    $response->assertOk();
});




/**
 * Can create problem
 */
test('Can create problem', function () {

    $admin = Admin::factory()->create();

    $topic = Topic::factory()->create();

    $tags = Tag::factory(5)->create();

    $response = $this->actingAs($admin, 'admin')->post('/admin/problems', [
        'title'       => 'Problem title 1',
        'description' => "Using Pest to create a feature test for the CRUD operations of a Post feature in Laravel is straightforward. Pest provides a simpler, expressive syntax while leveraging Laravel's testing capabilities",
        'topic' => $topic->id,
        'difficulty' => 'easy',
        'tags' => $tags->pluck('id')->toArray(),
        'examples' => [
            [
                "input" => "num=[1234,234,234,46]; target=9;",
                "output" => "234"
            ],
        ],

        'constraints' => [
            ["value" => "10 >= X =< 100"]
        ],
    ]);


    $response->assertRedirect('/admin/problems'); // or appropriate status code

    $this->assertDatabaseHas('problems', [
        "title" => "Problem title 1",
        "topic_id" => $topic->id,
    ]);
});


/**
 * Can update post
 */
test('problem can be updated', function () {

    $admin = Admin::factory()->create();

    $topic = Topic::factory()->create();

    $tags = Tag::factory(5)->create();

    $problem = Problem::factory()->create();

    $response = $this->actingAs($admin, 'admin')->put('/admin/problems/' . $problem->id, [
        'title'       => 'Updated problem title 111',
        'description' => "Using Pest to create a feature test for the CRUD operations of a Post feature in Laravel is straightforward. Pest provides a simpler, expressive syntax while leveraging Laravel's testing capabilities",
        'topic' => $topic->id,
        'difficulty' => 'easy',
        'tags' => $tags->pluck('id')->toArray(),
        'examples' => [
            [
                "input" => "num=[1234,234,234,46]; target=9;",
                "output" => "234"
            ],
        ],

        'constraints' => [
            ["value" => "10 >= X =< 100"]
        ],
    ]);


    $response->assertStatus(302);

    $response->assertSessionHasNoErrors();

    $this->assertDatabaseHas('problems', [
        "title" => "Updated problem title 111",
        "topic_id" => $topic->id,
    ]);
});


/**
 * Problem can be deleted
 */
test('problem can be deleted', function () {

    $admin = Admin::factory()->create();
    $problem = Problem::factory()->create();
    $response = $this->actingAs($admin, 'admin')->delete(route('admin.problems.destroy', $problem->id));
    $response->assertSessionHasNoErrors();
    $response->assertStatus(302);

    $this->assertDatabaseMissing('problems', [
        'id' => $problem->id,
    ]);
});
