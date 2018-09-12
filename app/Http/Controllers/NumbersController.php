<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PedroEscalante\Communicate;

class NumbersController extends Controller
{
	public function index(){
		$comm = new Communicate\Communicate;
    	$numbers = $comm->getNumbers();
		return response()->view('message', ['numbers'=>$numbers]);
	}
    
    public function getNumbers(){
    	$comm = new Communicate\Communicate;
    	$numbers = $comm->getNumbers();
    	return response()->view('numbers', ['numbers'=>$numbers]);
    }

    public function sendSMS(Request $request){
    	$comm = new Communicate\Communicate;
    	$res = $comm->sendMessage($request->from, $request->to, $request->message);
    	$numbers = $comm->getNumbers();
		return back()->with('success','SMS sent successfully!');	
    }
}
