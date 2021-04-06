<?php

namespace Tests\Integration;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    public function testHeadingErrorsPageNotFound()
    {
        // Without params
        $response = $this->get(url('/some.url'));

        // Must be exception NotFoundHttpException
        $response->assertStatus(404);
        $response->assertJson(['status' => 'error', 'message' => 'Page not found.']);
    }

    /**
     * @dataProvider myZipParamsProvider
     */
    public function testAddressZipParams($param, $value, $status, $code)
    {
        $response = $this->get(route('get.address.by.zip', [$param => $value]));

        $this->assertEquals($status, $response->json('status'));
        $response->assertStatus($code);
    }

    /**
     * @dataProvider myCityParamsProvider
     */
    public function testAddressCityParams($param, $value, $status, $code)
    {
        $response = $this->get(route('get.address.by.city', [$param => $value]));

        $this->assertEquals($status, $response->json('status'));
        $response->assertStatus($code);
    }

    public function myZipParamsProvider()
    {
        $data = [
            ['', '', 'error', 422],
            ['any', '12345', 'error', 422],
            ['zip', 12345, 'success', 200],
            ['zip', '12345', 'success', 200],
            ['zip', 1234567, 'error', 422],
            ['zip', 'asd', 'error', 422],
            ['zip', '1', 'error', 422],
        ];

        return $data;
    }

    public function myCityParamsProvider()
    {
        $data = [
            ['', '', 'error', 422],
            ['any', '12345', 'error', 422],
            ['cityLetters', 12345, 'success', 200],
            ['zip', '12345', 'error', 422],
            ['cityLetters', 1234567, 'success', 200],
            ['cityLetters', 'a', 'error', 422],
            ['cityLetters', '1', 'error', 422],
            ['cityLetters', 'Los', 'success', 200],
        ];

        return $data;
    }
}
