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
        $user = User::find($id);
        // die(json_encode($user['id']));
        $user_description = \App\UserDescription::where('user_id', $user['id'])->first();
        array_add($user, 'user_description', $user_description);
        $user_resume = \App\UserResume::where('user_id', $user['id'])->first();
        array_add($user, 'user_resume', $user_resume);
        $user_avatar = \App\UserAvatar::where('user_id', $user['id'])->first();
        array_add($user, 'user_avatar', $user_avatar);
        $user_experience = \App\UserExperience::where('user_id', $user['id'])->get();
        array_add($user, 'user_experience', $user_experience);
        return view('user.profile', compact('user'));
    }
    
    // public function hasRole()
    // {
    //      $roles = $this->roles->toArray();
    //      return !empty($roles);
    // }
}
