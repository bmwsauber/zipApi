<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
         *  $table->id();
            $table->string("zip", 5)->index();
            $table->string("city", 50)->index();
            $table->double("lat", 8, 5);
            $table->double("lng", 8, 5);
            $table->string("state_id", 3);
            $table->string("state_name", 50);
            $table->string("zcta", 50)->nullable(true);
            $table->string("parent_zcta", 50)->nullable(true);
            $table->integer("population")->nullable(true);
            $table->decimal("density", 6, 5)->nullable(true);
            $table->integer("county_fips");
            $table->string("county_name");
            $table->json("county_weights");
            $table->string("county_names_all")->nullable(true);
            $table->string("county_fips_all")->nullable(true);
            $table->string("imprecise", 10);
            $table->string("military", 10);
            $table->string("timezone", 50);
         */
        return [
            /**
             *
             */
        ];
    }
}
