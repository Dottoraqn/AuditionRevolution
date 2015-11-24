<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductionShowAudition;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductionShowAuditionRequest;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
      return view('home.index', compact('auditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = \Auth::id();
      $company = \App\ProductionCompany::where('owner_id', $user)->first();
      $shows = $company->get_shows;
      $lists = array();
      foreach ($shows as $show) {
        $lists[$show->id] = $show->name;
      }  
      //die(json_encode($lists));    
      return view('home.create')->with('lists', $lists);;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductionShowAuditionRequest $request)
    {
      $user = \Auth::id();
      
      $input = $request->all();
      $input['organizer_id'] = $user;
      ProductionShowAudition::create($input);

//        return $input;
      return redirect('home');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $auditionById = ProductionShowAudition::find($id);
      return view('home.show', compact('auditionById'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
