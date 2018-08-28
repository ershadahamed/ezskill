<?php

namespace App\Http\Controllers\Auth;

use App\Profile;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'ic_num' => 'required|digits:12|unique:users',
            'address_one' => 'required|string|max:191',
            'postcode' => 'required|digits:5',
            'city' => 'required|string|max:191',
            'state' => 'required|string|max:191',
            'phone_fixed' => 'required|digits_between:10,11',
            'phone_mobile' => 'required|digits_between:10,11',
            'acceptTerms' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'ic_num' => $data['ic_num'],
        ]);

        Profile::create([
            'user_id' => $user->id,
            'address1' => $data['address_one'],
            'address2' => $data['address_two'],
            'postcode' => $data['postcode'],
            'city' => $data['city'],
            'state' => $data['state'],
            'phone_fixed' => $data['phone_fixed'],
            'phone_fax' => $data['phone_fax'],
            'phone_mobile' => $data['phone_mobile'],
            'picture' => 'css/images/user.png',
        ]);

        // Assigning calon role to auto reg users
        $user->roles()->attach(1);

        return $user;
    }
}
