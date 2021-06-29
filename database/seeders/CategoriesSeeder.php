<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }
    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for($i=0; $i<5; $i++){
            $data[] = [
              'name'=> $faker->sentence(mt_rand(3, 10)),
                'created_at'=>now(),
                'updated_at'=>now()
            ];
        }
        return $data;
    }
}
