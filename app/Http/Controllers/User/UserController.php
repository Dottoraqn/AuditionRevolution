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
    public function email()
    {
        return view('user.email', ['user' => $users]);
    }
    public function password()
    {
        return view('user.password', ['user' => $users]);
    }
    public function remember_token()
    {
        return view('user.remember_token', ['user' => $users])
    }
    public function created_at()
    {
        return view('user.created_at', ['user' => $users])
    }
    public function updated_at()
    {
        return view('user.updated_at', ['user' => $users])
    }
    public function last_name()
    {
        return view('user.last_name', ['user' => $users])
    }
    public function phone_number()
    {
        return view('user.phone_number', ['user' => $users])
    }
    public function address()
    {
        return view('user.address', ['user' => $users])
    }
    public function city()
    {
        return view('user.city', ['user' => $users])
    }
    public function state()
    {
        return view('user.state', ['user' => $users])
    }
    public function zip()
    {
        return view('user.zip', ['user' => $users])
    }
    public function qr_code()
    {
        return view('user.qr_code', ['user' => $users])
    }
}