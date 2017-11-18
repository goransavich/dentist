<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Calendar;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Authenticatable;

use App\Event;

use App\User;



class BookingController extends Controller
{
    public function create()
    {
    	$doctors = DB::table('users')->where('status', '=', 'doctor')->get();
      
      return view('office', compact('doctors'));
    }


    public function store(){

      $id=request('choosedoctor');

      $doc=User::find($id);

      return view('mycalender', compact('doc'));

    }


    public function show($id)
    {
    	
       $events = [];

       $data = DB::table('events')->where('user_id', '=', $id)->get();

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

      $doctor = User::find($id);

      $calendar = Calendar::addEvents($events); 

      return view('mycalender', compact('calendar', 'doctor'));  
        
        
    }

}
