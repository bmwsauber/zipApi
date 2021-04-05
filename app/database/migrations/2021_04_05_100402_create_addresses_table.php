<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string("zip", 5)->index();
            $table->string("city", 50)->index();
            $table->double("lat", 9, 5);
            $table->double("lng", 9, 5);
            $table->string("state_id", 3);
            $table->string("state_name", 50);
            $table->string("zcta", 50)->nullable(true);
            $table->string("parent_zcta", 50)->nullable(true);
            $table->integer("population")->nullable(true);
            $table->decimal("density", 10, 5)->nullable(true);
            $table->integer("county_fips");
            $table->string("county_name");
            $table->json("county_weights");
            $table->string("county_names_all")->nullable(true);
            $table->string("county_fips_all")->nullable(true);
            $table->string("imprecise", 10);
            $table->string("military", 10);
            $table->string("timezone", 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
