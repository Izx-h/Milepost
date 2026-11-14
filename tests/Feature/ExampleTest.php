<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_homepage_explains_the_staged_import_process(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('KES 300,000 to start bidding.')
            ->assertSee('Know the full route.')
            ->assertSee('This website demo does not invent those terms.')
            ->assertSee('approximately KES 100,000')
            ->assertSee('about 25% versus car-yard prices is not guaranteed.')
            ->assertSee('href="/journey/example"', false)
            ->assertDontSee('http://localhost');
    }

    public function test_sample_journey_is_marked_as_illustrative(): void
    {
        $this->get('/journey/example')
            ->assertOk()
            ->assertSee('ILLUSTRATIVE ONLY')
            ->assertSee('not a live order');
    }

    public function test_unknown_page_returns_a_real_not_found_status(): void
    {
        $this->get('/not-a-real-page')
            ->assertNotFound()
            ->assertSee('name="robots" content="noindex, nofollow"', false)
            ->assertSee('ROUTE NOT FOUND / 404');
    }
}
