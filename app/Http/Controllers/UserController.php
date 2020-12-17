<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function get(Request $request)
    {
      $getUserId = Auth::id();  
    //   $user_id = $request->get("uid", $getUserId);
      $user = User::find($getUserId);
      return $user;
    }
}
