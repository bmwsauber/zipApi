<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddressTest extends TestCase
{
    /**
     * "Address by Zip" Page - have to return status 200
     */
    public function test_address_zip_page_status()
    {
        $response = $this->get(route('get.address.by.zip'));

        $response->assertStatus(200);
    }

    /**
     * "Address by City" Page - have to return status 200
     */
    public function test_address_city_page_status()
    {
        $response = $this->get(route('get.address.by.city'));

        $response->assertStatus(200);
    }

    /**
     * "Update from CSV" Page - have to return status 200
     */
    /*
    public function test_update_from_csv_page_status()
    {
        $response = $this->get(route('update.addresses.csv'));

        $response->assertStatus(200);
    }
    */

}
