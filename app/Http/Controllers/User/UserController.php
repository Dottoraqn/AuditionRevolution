<?php

namespace App\Http\Controllers\User;

use App\User;
use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return view('user.index', ['users' => $users]);
    }
    public function showProfile($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    
    // public function hasRole()
    // {
    //      $roles = $this->roles->toArray();
    //      return !empty($roles);
    // }
}
