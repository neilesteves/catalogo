<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('product')->insert([
                'name' => $faker->name,
	            'description' => $faker->realText(30),
                'category_id' => $faker->numberBetween(1,10),
                'brand_id' => $faker->numberBetween(1,10),
	        ]);
        }
    }
}
