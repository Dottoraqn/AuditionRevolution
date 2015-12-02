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
    if( $user ) {
      $company_group = \App\ProductionCompanyTeam::where('user_id', $user)->first();
      if( $company_group ) {
        $company_id = $company_group->production_company_id;
        
        $collaborators = \App\ProductionCompanyTeam::where('production_company_id', $company_id)->get();
        $people = array();
        foreach ($collaborators as $c) {
          $name = \App\User::where('id', $c->user_id)->first();
          $people[$c->user_id] = $name->username;
        }

        $company = \App\ProductionCompany::where('id', $company_id)->first();
        $shows = $company->get_shows;
        
        $comp_name = $company->name;
        $comp_owner_id = $company->owner_id;
        $comp_owner = \App\User::where('id', $comp_owner_id)->first();
        $comp_owner_name = $comp_owner->username;
        
        $auditions = array();
        foreach ($shows as $show) {
          $audition = ProductionShowAudition::where('show_id',$show->id)->get();  
          foreach ($audition as $a) {
            $auditions[$a->id] = $a;
            $a["show"] = $show->name;
            $a["owner_name"] = $comp_owner_name;
            $a["collaborators"] = $people;
            $start_day = strtotime($a['audition_date']);
            $start_date = date( 'F j, Y', $start_day );
            $a['formatted_audition_date'] = $start_date;
          }
        } 
        
        // $auditions["company"] = $comp_name;
        // $auditions["owner"] = $comp_owner_name;        

        //array_push($auditions, $comp_name, $comp_owner_name);
        //die(json_encode($auditions));
        return view('auditions.index', compact('auditions'));
      }
      else {
        return view('home.index');
      }
    } 
    else {
      return view('home.index');
    }
  } 
    
    public function show($id)
    {
      // DB::table('production_company_show_audition')
      //       ->where('id', 1)
      //       ->update(['votes' => 1]);
      // $allAuditions = array();
      // $allAuditions = DB::table('user_auditions') ->where($user_id);
      
      $audition = ProductionShowAudition::find($id);
      $audition_date = strtotime($audition['audition_date']);
      $start_date = date( 'F j, Y', $audition_date );
      $audition['formatted_audition_date'] = $start_date;
      // $audition_time = strtotime($audition['audition_time']);
      // $start_time = date( 'F j, Y', $audition_time );
      // $audition['formatted_audition_time'] = $start_time;
      return view('auditions.show', compact('audition'));
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
      $shows = \App\ProductionShow::all();
      foreach( $shows as $show ) {
        $company = \App\ProductionCompany::where('id', $show['production_company_id'])->first();
        $auditions = ProductionShowAudition::where('show_id', $show['id'])->get();
        foreach( $auditions as $audition ) {
          // die(json_encode($audition['id']));
          $roles = \App\ProductionShowAuditionRole::where('audition_id', $audition['id'])->get();
          // die(json_encode($roles));
          array_add($audition, 'audition_roles', $roles );
        }
        array_add($show, 'show_company', $company);
        array_add($show, 'auditions', $auditions );
      }
      return view('search', compact('shows'));
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
