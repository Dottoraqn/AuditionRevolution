<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductionShowRequest;
use App\ProductionShow;
//use App\ProductionCompany;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class ProductionShowController extends Controller
{
  
  
  // $table->increments('id');
  // $table->integer('production_company_id')->unsigned();
  // $table->foreign('production_company_id')->references('id')->on('production_company')->onDelete('cascade');


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $production_shows = ProductionShow::latest('created_at')->get();      
      return view('production_show.index', compact('production_shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
      // $company = ProductionCompany::find(102);      
      // $company->production_show()->save($task);
      
      $production_shows = ProductionShow::all();
      return view('production_show.create', compact('production_shows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductionShowRequest $request)
    {
      $user = \Auth::id();
      $show = new ProductionShow;
      $company = \App\ProductionCompany::where('owner_id', $user)->first();
      
      $show->company()->associate($company);
    
      $input = $request->except('_token');  
      $input['production_company_id'] = $show->company->id;
      ///die(json_encode($input));
      
      $show::updateOrCreate($input);

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
      $shows = ProductionShow::findOrFail($id);

      $production_company = $shows['production_company_id'];
      $company = \App\ProductionCompany::where( 'id', $production_company )->first();
      $auditions = \App\ProductionShowAudition::where('show_id', $shows['id'])->get();
      $start_day = strtotime($shows['start_date']);
      $start_date = date( 'F j, Y', $start_day );
      $shows['formatted_start_date'] = $start_date;
      $end_day = strtotime($shows['end_date']);
      $end_date = date( 'F j, Y', $end_day );
      $shows['formatted_end_date'] = $end_date;
      foreach( $auditions as $audition ) {
        // die(json_encode($audition['id']));
        $roles = \App\ProductionShowAuditionRole::where('audition_id', $audition['id'])->get();
        // die(json_encode($roles));
        array_add($audition, 'audition_roles', $roles );
      }
      array_add($shows, 'company', $company);
      array_add($shows, 'auditions', $auditions );

      return view('production_show.show', compact('shows'));
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
