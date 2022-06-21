<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Controllers\Auth;
class CustomAuthCountroller extends Controller
{
    //
    public function login()
    {
        $user=User::find(1);
        Auth::login($user);
        return redirect('/services');
    }
    public function CustomLogin($id)
    {
       // $user=User::find($id);
        //if( ! $user){

         //   Auth::logout();
         //   return redirect('login');
       // }
       $user=User::findorFail($id);
        Auth::login($user);
            return redirect('/services');
    }
}
