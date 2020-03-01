<?php

namespace App\library;
use Illuminate\Support\Facades\DB;

class GetFunction{

    public static function get_technologies(){
        $technologies = DB::table('technologies')->select('id','name','code')->get();
        return $technologies;
    }

    public static function get_semesters(){
        $semesters = DB::table('semesters')->select('id','name')->get();
        return $semesters;
    }

    public static function get_sessions(){
        $sessions = DB::table('sessions')->select('id','session_year')->get();
        return $sessions;
    }




}
