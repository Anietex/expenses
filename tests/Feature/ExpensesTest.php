<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExpensesTest extends TestCase
{


    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');
        $this->artisan('db:seed');
    }



    protected function tearDown():void
    {
        $this->artisan('migrate:reset');
    }


    /**
     * Creating expense feature test
     */
    public function testCreateExpense(){
        $response = $this->json('POST','api/expenses',
            [
                "date"=>"2019-06-05",
                "value"=>500,
                "reason"=>"expense reason"
            ]
        );


        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => [
                    "value"=>500
                ],
            ]);
    }


    /**
     * List expenses features test
     */
    public function testListExpenses(){

        $expense = [
            "reason"=>"expense reason",
            "date"=>"2019-06-05",
            "value"=>500,

        ];
         $this->json('POST','api/expenses',$expense);


        $response = $this->json('GET','api/expenses');

        $response->assertStatus(200);

        $this->assertCount(1,$response->decodeResponseJson()['data']);

    }
}
