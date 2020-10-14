<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function users(){
        $users = User::all();
        return response()->json($users);
    }

    public function singlePage(){
        return view('vue');
    }
    public function user($user_id){
        $user = User::find($user_id);
        return response()->json($user);
    }
}
