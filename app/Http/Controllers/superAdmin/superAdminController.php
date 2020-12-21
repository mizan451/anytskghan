<?php

namespace App\Http\Controllers\superAdmin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class superAdminController extends Controller
{
    public function index()
    {

        return view('superadmin.index');
    }

    public function getAllUser(){
        //$users = User::all();
        $users = DB::select('select * from users where role_id ="1" ');
        return view('superadmin.index')->with('users' , $users);
    }

    }

