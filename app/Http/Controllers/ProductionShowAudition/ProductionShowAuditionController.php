<?php

namespace App\Http\Controllers\ProductionShowAudition;

use App\ProductionShowAudition;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;

class ProductionShowAuditionController extends Controller
{

  // Kevin's index method
  // public function index() {
  //     $auditions = DB::table('production_company_show_audition')->get();
  //     return view('auditions.auditions', ['auditions' => $auditions]);
  // }
  
  // Kevin's search by index method
  // public function showAudition($id)
  // {
  //     return view('audition.audition', ['production_company_show_audition' => ProductionShowAudition::findOrFail($id)]);
  // }
  
    public function index()
    {
      $auditions = ProductionShowAudition::latest('created_at')->get();      
      return view('home.index', compact('auditions'));
    }  
    
    public function show($id)
    {
      // DB::table('production_company_show_audition')
      //       ->where('id', 1)
      //       ->update(['votes' => 1]);
      // $allAuditions = array();
      // $allAuditions = DB::table('user_auditions') ->where($user_id);
      
      $auditionById = ProductionShowAudition::find($id);
      return view('home.show', compact('auditionById'));
    }  

    protected function create()
    {
      //$shows = ProductionShowAudition::where('user_id', 2)->get();

      $auditions = ProductionShowAudition::all();
      return view('home.create', compact('auditions'));
      
      // create([
      //     'name' => $data['name'],
      //     'description' => $data['description'],
      //     'location' => ($data['location']),
      // ]);  
    }
    
     public function quickUpdate()
     {
  //       $inputs = Request::all();
  //       $serie = Serie::find($inputs['pk']);
  //       $serie->$inputs['name'] = $inputs['value'];
  //       return $serie->save();
  //}
      
    }
  
    protected function store()
    {
      $input = Request::all();
      ProductionShowAudition::create($input);

      return redirect('home');
      
    
    }  

    
}
