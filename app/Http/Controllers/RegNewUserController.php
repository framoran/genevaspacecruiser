<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegNewUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function new_user(Request $data): RedirectResponse
    {
        if (Auth::user()->admin == 1) {

            $name = htmlspecialchars($data['name']);
            $familyName = htmlspecialchars($data['familyName']);
            $institution = htmlspecialchars($data['institution']);
            $email = htmlspecialchars($data['email']);
            $password = htmlspecialchars(Hash::make($data['password']));

            // check if user exists
            $user_exist = DB::table('users')
                ->where('email', '=', $email)
                ->value('email');

            if ($user_exist == null) {

                $data = ['name' => $name, 'familyName' => $familyName, 'institution' => $institution, 'validate' => 1, 'email' => $email, 'password' => $password];
                DB::table('users')->insert($data);

                return redirect('home?q=admin&result=user_created');
            } else {

                return redirect('home?q=admin&result=user_exist');

            }
        }
    }
}
