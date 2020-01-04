<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function test_should_return_the_base_title_if_none_given()
    {
        $this->assertEquals('ArtisansMap', page_title());
    }

    /** @test */
    public function should_return_page_title_if_correct_title_given()
    {
    	$this->assertEquals('ArtisansMap - About', page_title('About'));
    	$this->assertEquals('ArtisansMap - Reach Out!', page_title('Reach Out!'));
    }

    /** @test */
    public function should_return_active_class_based_on_active_route()
    {
    	$this->get(route('home'));
    	$this->assertEquals('active', set_active_route(route('home')));
    	$this->assertEquals('', set_active_route('about'));
    }
}
