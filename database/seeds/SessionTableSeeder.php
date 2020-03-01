<?php

use Illuminate\Database\Seeder;
use App\session;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
        	[
        		'session_year' => "2013-14"
        	],

        	[
        		'session_year' => "2014-15"
        	],

        	[
        		'session_year' => "2015-16"
        	],

        	[
        		'session_year' => "2016-17"
        	],

        	[
        		'session_year' => "2017-18"
        	],

        	[
        		'session_year' => "2018-19"
        	],

        	[
        		'session_year' => "2019-20"
        	]

        ];

        foreach ($sessions as $sessions){
           Session::create($sessions);
       }



    }
}
