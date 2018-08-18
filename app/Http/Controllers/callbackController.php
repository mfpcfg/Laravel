<?php

namespace App\Http\Controllers;

use App\Mail\mailSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class callbackController extends Controller
{

	public function all()
	{

		return view('front.callback.index');
	}

    public function call_back(Request $request)
    {



    	$name = $request->name;
    	$phone = $request->phone;
    	$email = $request->email;
    	$msg = $request->msg;

    	return view('front.callback.index', [
    		Mail::to('mfpcfg@gmail.com')->send(new mailSetting($name, $phone, $email, $msg)),
    	]);

    	/*
    	Mail::to('mfpcfg@gmail.com')->send(new mailSetting($name, $phone, $email, $msg));
    	
    	return view('front.callback.index');*/
    }
}
