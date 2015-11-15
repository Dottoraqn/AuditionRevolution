<?php

namespace App\Http\Controllers\ProductionShowAudition;

use App\ProductionShowAudition;
use DB;
use App\Http\Controllers\Controller;

class ProductionShowAuditionController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $auditions = DB::table('production_company_show_audition')->get();

        return view('auditions.auditions', ['auditions' => $auditions]);
    }
    public function showAudition($id)
    {
        return view('audition.audition', ['production_company_show_audition' => ProductionShowAudition::findOrFail($id)]);
    }
    
    public function getAudition($user_id, $id)
    {
        $first = DB::table('user_auditions') ->where($user_id);
        $userAudition = DB::table('user_auditions')->where('id', '=', $id)->union($first)->get();
        return view('projects', ['userAudition' => $userAudition]);
    }
    
    public function getAllAuditions($user)
    {
      $allAuditions = array();
      $allAuditions = DB::table('user_auditions') ->where($user_id);
      return view('projects', ['allAuditions' => $allAuditions]);
    }
}
