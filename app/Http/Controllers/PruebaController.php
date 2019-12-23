<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class PruebaController extends Controller
{
    //
    function prueba(){
        $users = User::all();

        return view('welcome',['users'=>$users]);
    }
}
