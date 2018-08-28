<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Response;

class ApiLoginController extends Controller
{
    //

    public function login(Request $request)
    {
    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    		$student = Auth::user();
    		return response([
    			'user' => $student
    		], 200)->header('Content-Type', 'application/json');
    	}else{
    		return response([
    			'error' => 'Wrong email or password',
    			'request' => $request->all()
    		], 400)->header('Content-Type', 'application/json');
    	}
    }
}
