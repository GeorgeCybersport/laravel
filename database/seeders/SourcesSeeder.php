<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sources')->insert($this->getData());
    }
    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for($i=0; $i<10; $i++){
            $data[] = [
                'news_id'=> mt_rand(3, 10),
                'link'=> $faker->sentence(1),
                'created_at'=>now(),
                'updated_at'=>now()
            ];
        }
        return $data;
    }
}
