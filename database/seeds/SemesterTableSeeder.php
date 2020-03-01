<?php

use Illuminate\Database\Seeder;
use App\semester;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semesters = [
        	[
        		'name' => "1st"
        	],

        	[
        		'name' => "2nd"
        	],

        	[
        		'name' => "3rd"
        	],

        	[
        		'name' => "4th"
        	],

        	[
        		'name' => "5th"
        	],

        	[
        		'name' => "6th"
        	],

        	[
        		'name' => "7th"
        	]

        ];

        foreach ($semesters as $semester){
           Semester::create($semester);
       }
    }
}
