<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

      

        $MedicineCategory = \App\Models\Category::create([

            "name"=>"Medicine"
    ]);

    $EngineeringCategory = \App\Models\Category::create([

        "name"=>"Engineering"
]);


$SciencesCategory = \App\Models\Category::create([

    "name"=>"Sciences"
]);


$PoliticsCategory = \App\Models\Category::create([

    "name"=>"Politics"
]);

$EconomyCategory  = \App\Models\Category::create([

    "name"=>"Economy"
]);

$SportsCategory  = \App\Models\Category::create([

    "name"=>"Sports"
]);

 



    
    }
}
