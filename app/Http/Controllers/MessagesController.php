<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = \Auth::id();
      if( $user ) {
        $all_messages = \App\Message::where('receiving_id', $user)->get();
        foreach($all_messages as $message ){
          $sender_id = $message['sender_id'];
          // die(json_encode($sender_id));
          $sender_user = \App\User::where('id', $sender_id)->first();
          array_add($message, 'sender_user', $sender_user);
          $string = strip_tags($message['message_body']);
          if( strlen($string) > 150 ) {
            $stringCut = substr( $string, 0, 150 );
            $string = substr($stringCut, 0, strrpos($stringCut, ' ' )).'...Read More';
          }
          $message['formatted_message'] = $string;
          // die(json_encode($message));
        }


        return view('messages', compact('all_messages'));
      } 
      else {
        return view('home.index');
      }
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
