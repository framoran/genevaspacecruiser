<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
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
    public function index(): View
    {

        $data = DB::table('experiments')
            ->where('user_id', '=', Auth::user()->id)
            ->get();

        // si Admin 1 -> show all
        if (Auth::user()->superadmin) {
            $users = DB::table('users')
                ->where('id', '!=', Auth::user()->id)
                ->get();
        } elseif (Auth::user()->admin) {
            $users = DB::table('users')
                ->where('superadmin', '=', 0)
                ->where('id', '!=', Auth::user()->id)
                ->get();
        } else {
            $users = DB::table('users')
                ->where('id', '=', Auth::user()->id)
                ->get();
        }

        $name = DB::table('users')
            ->where('superadmin', '=', 1)
            ->value('name');

        $lastName = DB::table('users')
            ->where('superadmin', '=', 1)
            ->value('familyName');

        $email = DB::table('users')
            ->where('superadmin', '=', 1)
            ->value('email');

        return view('home', ['experiment_data' => $data, 'experiment_users' => $users, 'name' => $name, 'lastName' => $lastName, 'email' => $email]);
    }

    public function validation(Request $request): RedirectResponse
    {

        if (Auth::user()->admin == 1) {

            $user_id = htmlspecialchars($request->input('user_id'));

            $validation = DB::table('users')
                ->where('id', '=', $user_id)
                ->value('validate');

            if ($validation == 1) {
                DB::update('update users set validate = ? where id = ?', [0, $user_id]);
            } else {
                DB::update('update users set validate = ? where id = ?', [1, $user_id]);
            }

            return redirect('home?q=admin');
        }

    }

    public function validate_admin(Request $request): RedirectResponse
    {

        if (Auth::user()->superadmin == 1) {

            $user_id = htmlspecialchars($request->input('user_id'));

            $admin = DB::table('users')
                ->where('id', '=', $user_id)
                ->value('admin');

            if ($admin == 1) {
                DB::update('update users set admin = ? where id = ?', [0, $user_id]);
            } else {
                DB::update('update users set admin = ? where id = ?', [1, $user_id]);
            }

            return redirect('home?q=admin');
        }

    }
}
