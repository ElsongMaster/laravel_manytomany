<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('posts')->insert([
            
            ["nom"=> $faker->name,
            "email"=>$faker->email,
            "commentaire"=>$faker->text(10),
            ],
            ["nom"=>$faker->name,
            "email"=>$faker->email,
            "commentaire"=>$faker->text(10),
            ],
            ["nom"=>$faker->name,
            "email"=>$faker->email,
            "commentaire"=>$faker->text(10),
            ],
            ["nom"=>$faker->name,
            "email"=>$faker->email,
            "commentaire"=>$faker->text(10),
            ],
            ["nom"=>$faker->name,
            "email"=>$faker->email,
            "commentaire"=>$faker->text(10),
            ],
           
        ]);
    }
}
