<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class ApiUserController extends Controller
{
    //

    public function getUser($id)
    {
    	$user = User::find($id);

    	if ($user == null) {
    		return response([
    		    'error'=>"Invalid user ID",
    		], 400)->header('Content-Type', 'application/json');
    	}else{

            return response([ 'User' => $user,
                        'message'=>"Sucessful"
                    ], 200)->header('Content-Type', 'application/json');
    	}
    }
}
