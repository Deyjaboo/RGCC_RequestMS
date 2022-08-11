<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
class UserController extends Controller
{
    function user_show(){
        $data = DB::table('users')->where('role', "user")->get();
        $num = DB::table('users')->where('role', "user")->count();

        $new = DB::table('docrequests')->where('Status', "New")->count();
        $claimed = DB::table('docrequests')->where('Status', "Claimed")->count();
        $ready = DB::table('docrequests')->where('Status', "Ready")->count();
        return view('dashboard',['data'=>$data,'num'=>$num ,'new'=>$new ,'claimed'=>$claimed ,'ready'=>$ready]);
    }
}
