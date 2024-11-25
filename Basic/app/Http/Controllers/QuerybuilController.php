<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuerybuilController extends Controller
{
    public function dbone(){
        $users = DB::table('users')->get();
        dd($users);
    }
}
