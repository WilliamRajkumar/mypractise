<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userListController extends Controller
{
    public function users(Request $request){

        $data = \DB::table('users')->get();
    return response()->json(['data' => $data]);
       
    }
}
