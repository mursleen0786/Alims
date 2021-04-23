<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactcontroller extends Controller
{
    //
    public function contact(){
    	return view ('contact');
    }
    public function store (Request $request){
    	$contact= new contact;
    	$contact->name = $request->cname;
    	$contact->email = $request->cemail;
    	$contact->courses = $request->services;
    	$contact->message = $request->message;
    	$contact->save();
    	return redirect()->back()->with('success','Thankx for coming');

    }
}
