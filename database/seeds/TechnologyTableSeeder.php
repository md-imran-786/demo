<?php

use Illuminate\Database\Seeder;
use App\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $technologies = [
           [
               'code' =>"687",
               'name' => "Architecture & Interior Design"
           ],

           [
               'code' =>"666",
               'name' => "Computer"
           ],

           [
               'code' =>"664",
               'name' => "Civil"
           ],

           [
               'code' =>"667",
               'name' => "Electrical"
           ],

           [
               'code' =>"19",
               'name' => "Textile"
           ],

           [
               'code' =>"694",
               'name' => "Telecomunication"
           ],

           [
               'code' =>"49",
               'name' => "GDPM"
           ],

           [
               'code' =>"11",
               'name' => "Tourism & Hospitality"
           ]
       ];

       foreach ($technologies as $technology){
           Technology::create($technology);
       }

    }
}
