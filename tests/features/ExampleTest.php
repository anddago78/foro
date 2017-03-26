<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
  function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            
            'name' => 'Andrea Cattalani',
        ]);
        $this->actingAs($user,'api')
                ->visit('api/user')
             ->see('Andrea Cattalani');
    }
}
