<?php

namespace App\Http\Controllers;

use App\Exports\ExperimentsExport;
use Auth;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ExperimentController extends Controller
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
    public function new(): View
    {
        return view('new');
    }

    public function create(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'experimentName' => 'required|max:35',
            'experimentLang' => 'required|not_in:-- Select --',
            // 'experimentType' => 'required|max:35',
            // 'experimentCogTask' => 'required|max:35',
        ]);

        // data
        $user_id = Auth::user()->id;

        $experimentName = htmlspecialchars($request->input('experimentName'));
        $lang = htmlspecialchars($request->input('experimentLang'));
        $experimentGroup = htmlspecialchars($request->input('experimentGroup'));

        // Current time
        $timestamp = date('Y-m-d H:i:s');

        if ($lang == 'de') {
            $link = 'de/instruction1?Experiment_Id=';
            $lang = 'German';
        } elseif ($lang == 'en') {
            $link = 'en/instruction1?Experiment_Id=';
            $lang = 'English';
        } elseif ($lang == 'it') {
            $link = 'it/instruction1?Experiment_Id=';
            $lang = 'Italian';
        } elseif ($lang == 'nl') {
            $link = 'nl/instruction1?Experiment_Id=';
            $lang = 'Dutch';
        } elseif ($lang == 'zh') {
            $link = 'zh/instruction1?Experiment_Id=';
            $lang = 'Chinese';
        }else {
            $link = 'instruction1?Experiment_Id=';
            $lang = 'French';
        }

        if (Auth::user()->validate == 1) {

            // insert experiment into database
            $data = ['user_id' => $user_id, 'experiment' => $experimentName, 'experimentGroup' => $experimentGroup, 'link' => $link, 'lang' => $lang, 'created_at' => $timestamp];
            DB::table('experiments')->insert($data);

            // complete link with experiment id
            $id = DB::table('experiments')
                ->where('user_id', '=', Auth::user()->id)
                ->orderBy('created_at', 'DESC')
                ->value('id');

            $link = $link.$id;

            // modify link in function of the experiment Group
            if ($experimentGroup == 2 || $experimentGroup == 3) {
                $link = $link.'&&eui=';
            }

            // if group == 3 or 4 -> set a redirection link
            if ($experimentGroup == 3 || $experimentGroup == 4) {
                $redirectionLink = htmlspecialchars($request->input('redirectionLink'));
                DB::update('update experiments set first_link = ? where id = ?', [$redirectionLink, $id]);
            }

            DB::update('update experiments set link = ? where id = ?', [$link, $id]);

            return redirect('home?q=experiments&resultCreate=success');

        } else {

            return redirect('home?q=experiments&result=error');

        }

    }

    public function update(): View
    {
        return view('update');
    }

    public function delete(Request $request): RedirectResponse
    {
        $Experiment_Id = htmlspecialchars($request->input('Experiment_Id'));

        $user_id = DB::table('experiments')
            ->where('id', '=', $Experiment_Id)
            ->value('user_id');

        // check whether user is owner of the Experiment
        if ($user_id == Auth::user()->id) {

            DB::table('experiments')
                ->where('id', '=', $Experiment_Id)
                ->delete();

            return redirect('home?q=experiments&resultDel=success');

        } else {

            return redirect('home?result=error');

        }

    }

    public function update_redirection_link(Request $request): RedirectResponse
    {

        $experiment_id = htmlspecialchars($request->input('experiment_id'));
        $redirection_link = htmlspecialchars($request->input('redirection_link'));

        $redirection_link = ltrim($redirection_link, 'url:');

        // Check whether it is the owner of the data
        $experiment_owner = DB::table('experiments')
            ->where('id', '=', $experiment_id)
            ->value('user_id');

        if ($experiment_owner == Auth::user()->id) {

            DB::update('update experiments set first_link = ? where id = ?', [$redirection_link, $experiment_id]);

        } else {

            return redirect('home?q=experiments&error=notowner');

        }

    }

    public function export(Request $request)
    {
        // Check whether it is the owner of the data
        $experiment_owner = DB::table('experiments')
            ->where('id', '=', $_GET['experiment'])
            ->value('user_id');

        if ($experiment_owner == Auth::user()->id) {
            return Excel::download(new ExperimentsExport,
                'data.xlsx'
            );
        }

        return redirect('home?q=experiments&result=success');

    }
}
