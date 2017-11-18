<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {

    	return view('create');

    }

    public function store()
    {

    	//validate form

    	$this->validate(request(), [

    		'name' => 'required',
    		'username' => 'required',
    		'password' => 'required',
    		'status' => 'required'


    		]);

    	//create and save the user
    	
    	$user=User::create(request(['name', 'username', 'email','password', 'status']));
    	
    	//Sign them in

    	//auth()->login($user);

    	// redirect to home

    	return redirect('/');

    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/');
    }

}
