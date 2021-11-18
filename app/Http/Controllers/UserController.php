<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        $user->load('staff_info', 'customer_info');
        return response()->json($user);
        // if($user->role_id == 1){
        //     dd($user->customer_info);
        // }
        // dd($user->staff_info);
    }
}
