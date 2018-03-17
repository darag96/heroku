<?php

use Illuminate\Database\Seeder;
use App\Item;
class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Item::truncate();

    	$faker = \Faker\Factory::create();

                // And now, let's create a few articles in our database:
    	for ($i = 0; $i < 20; $i++) {
    		Item::create([
    			'text' => $faker->sentence,
    			'body' => $faker->paragraph,
    		]);

    	}
    	

    }
