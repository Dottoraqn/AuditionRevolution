<?php

namespace App\Http\Controllers\ProductionShowAudition;

use App\ProductionShowAudition;
use App\ProductionCompanyTeam;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;

class ProductionShowAuditionController extends Controller
{
  
    public function index()
    {
      $user = \Auth::id();
      $company_group = \App\ProductionCompanyTeam::where('user_id', $user)->first();
      $company_id = $company_group->production_company_id;
      
      $company = \App\ProductionCompany::where('id', $company_id)->first();
      $shows = $company->get_shows;
      //die(json_encode($shows));
      $auditions = array();
      foreach ($shows as $show) {
        $audition = ProductionShowAudition::where('show_id',$show->id)->get();  
        foreach ($audition as $a) {
          $auditions[$a->id] = $a;
        }
      } 
      //die(json_encode($auditions));
      //$auditions = ProductionShowAudition::latest('created_at')->where()->get();  
                
      return view('auditions.index')->with('auditions', $auditions);
    }  
    
    public function show($id)
    {
      // DB::table('production_company_show_audition')
      //       ->where('id', 1)
      //       ->update(['votes' => 1]);
      // $allAuditions = array();
      // $allAuditions = DB::table('user_auditions') ->where($user_id);
      
      $auditionById = ProductionShowAudition::find($id);
      return view('auditions.show', compact('auditionById'));
    }  

    protected function create()
    {
      //$shows = ProductionShowAudition::where('user_id', 2)->get();
      // $company = \App\ProductionCompany::where('owner_id', $user)->get();
      // $shows = \App\ProductionShow::where('production_show_id', $company)->get();
      // 
      // return view('home.createAudition', compact('shows'));
       $auditions = ProductionShowAudition::all();
       return view('auditions.create', compact('auditions'));
      
      // create([
      //     'name' => $data['name'],
      //     'description' => $data['description'],
      //     'location' => ($data['location']),
      // ]);  
    }
    
    public function postQuickUpdate()
    {
//      $id = Input::get('pk');
//      //get the new value
//      $newName = Input::get('value');
//      //get the Row to be updated with new value
//      $data = ProductionShowAudition::whereId($id)->first();
//      $data->name = $newName;
//      if($data->save())
//          return Response::json(array('status'=>1));
//      else
//          return Response::json(array('status'=>0));
    }
    
  
    protected function store()
    {
      $user = \Auth::id();
      
      $input = Request::all();
      $input['organizer_id'] = $user;
      $input['show_id'] = 1;
      ProductionShowAudition::create($input);

//        return $input;
      return redirect('auditions');

    }

    protected function search()
    {
      $auditions = ProductionShowAudition::all();
      foreach( $auditions as $audition ) {
        $show_id = $audition['show_id'];
        $show = \App\ProductionShow::where('id', $show_id)->first();
        array_add($audition, "audition_show", $show );
        $company = \App\ProductionCompany::where('id', $show['production_company_id'] )->first();
        array_add($audition, "audition_company", $company );
      }
      return view('search', compact('auditions'));
    }
    
    protected function getAllShows()
    {
//       $user = \Auth::id();
//       $company = \App\ProductionCompany::where('owner_id', $user)->first();
// 
//       $input = $company->shows;
// 
// //        return $input;
//       return view('home.index', compact('input'));

    }  

    
}
