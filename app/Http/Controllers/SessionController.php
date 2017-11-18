<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Authenticatable;

use App\User;

class SessionController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest', ['except' => 'destroy']);

        
    }

    public function create()
    {

    	return view('login');
    }

    public function store()
    {
       if (! auth()->attempt(request(['username', 'password']))){

   		  return back()->withErrors(

          ['message' => 'Please check your credentials and try again']
        );

    	}
        
        return redirect('office');
        
    	
    }

    
}

