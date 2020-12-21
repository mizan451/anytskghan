<?php

namespace App\Http\Controllers\Admin;

use App\LogActivity;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }


    public function profile($id){
            $user = User::find($id);
                if($user){
                    return view('admin.profile')->withUser($user);
                }else{
                   return redirect()->back();
             }
        }


}
