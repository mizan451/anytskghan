<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    /*
    public function profile($id){
        $user = User::find($id);
        if($user){
            return view('user.profile')->withUser($user);
        }else{
             return redirect()->back();
        }
    }*/

    public function changeStatus(Request $request){
              $user = User::find($request->user_id);
              $user->status=$request->status;
              $user->save();
              return response()->json(['success'=>'status changes successfully']);
    }

}
