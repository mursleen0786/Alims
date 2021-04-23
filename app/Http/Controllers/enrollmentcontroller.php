<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enrollment;

class enrollmentcontroller extends Controller
{
	//
    public function enrollment(){
    	return view ('enrollment');
    }
    public function store (Request $request){
    	$enrollment= new enrollment;
    	$enrollment->name = $request->ename;
    	$enrollment->email = $request->eemail;
    	$enrollment->phone = $request->ephone;
        $enrollment->course = $request->ecourse;
    	$enrollment->save();
    	return redirect()->back()->with('success','Thankx for coming');

    }
}
