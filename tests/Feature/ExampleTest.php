<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->post('/order',[
	"products" =>"salam",
	"totalPrice" => 1200,
	"address" => "sadasd",
	"paymentType" => 122332
]);

        $response->assertStatus(200);
    }
}
