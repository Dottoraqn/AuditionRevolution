<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class EditController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Edit User Information Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the input of data regaurding new users and the
    | editing of said data after it has been input. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    
    //look at production show and production company for more editing funsies

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'description' => 'max:255',
            'gender' => 'required',
            'ethnicity' => 'required',
            'eyeColor' => 'required',
            'hairColor' => 'required',
            'weight' => 'required|numeric|min:2|max:3',
            'height' => 'required|regex:"[2-7](1[01]|\d)"',
            'vocalRange' => 'required',
            'headshot' => 'required|image',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'description' => $data['description'],
            'gender' => $data['gender'],
            'ethnicity' => $data['ethnicity'],
            'eyeColor' => $data['eyeColor'],
            'hairColor' => $data['hairColor'],
            'weight' => $data['weight'],
            'height' => $data['height'],
            'vocalRange' => $data['vocalRange'],
            'headshot' => $data['headshot'],
        ]);
    }
}
