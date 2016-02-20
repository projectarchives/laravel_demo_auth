<?php

class AuthController extends BaseController
{
    public function index()
    {
        return View::make('register');
    }

    public function register()
    {
        $first_name = \Input::get('first_name');
        $last_name = \Input::get('last_name');
        $username = \Input::get('username');
        $password = \Input::get('password');

        $validator = Validator::make([
                'username' => $username,
                'password' => $password,
            ],
            [
            'username' => 'unique:users,username',
            'password' => 'min:4',
        ]);

        if ($validator->fails()) {
            return $validator->messages();
        }
        else {
            User::create([
                'username' => $first_name,
                'password' => Hash::make($password),
                'first_name' => $first_name,
                'last_name' => $last_name
            ]);
            return View::make('index');
        }
    }

    public function showLogin()
    {
        return View::make('login');
    }

    public function login()
    {
        $username = \Input::get('username');
        $password = \Input::get('password');

        $user_authentication = Auth::attempt([
            'username' => $username,
            'password' => $password
        ]);

        if ($user_authentication) {
            return "Authorized User";
        } else {
            return "Unauthorized access";
        }
    }
} 