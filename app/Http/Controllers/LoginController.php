<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

  public function post(Request $request)
  {


  		$email= $request->email;
        $password= $request->password;
        if ( Auth::attempt(['email'=>$email,'password'=>$password]) )
        {
            return redirect()->route('admin.main.panel');
        }
    	return redirect()->route('login');

  }

}
