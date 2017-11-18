<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use DB;

use Carbon\Carbon;

use App\Event;

class EventController extends Controller
{
    public function index()
    {
       $events = [];

       $data = Event::all();

       if($data->count()){

          foreach ($data as $key => $value) {

            $events[] = Calendar::event(

                $value->title,

                false,
                
                new \DateTime($value->start),

                new \DateTime($value->end)

            );

          }

       }

      $calendar = Calendar::addEvents($events); 

      $doctors = DB::table('users')->where('status', '=', 'doctor')->get();

      return view('mycalender', compact('calendar', 'doctors'));  
    }

    public function store($id)
    {

      $this->validate(request(), [

                'startdatetime'=> 'required',
                'enddatetime' => 'required',
                
                'title' => 'required'
 
            ]);
      
      Event::create([

            'start' => request('startdatetime'),

            'end' => request('enddatetime'),

            'title' => request('title'),

            'user_id' => $id,

            ]);
     
      return redirect('/office');
    }
}
