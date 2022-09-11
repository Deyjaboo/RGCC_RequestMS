<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
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
    function user_profile(){
        $data = DB::table('users')->where('student_id', Auth::user()->cp_num)->get();
        // $pass1 = DB::table('users')->select('password')->where('stud_id', Auth::user()->cp_num)->get();
        // $pass =  $decrypted = Crypt::decryptString($pass1);
        // $encrypted = Crypt::encryptString('123456');
        // $pass = Crypt::decryptString($encrypted);
        $pass = Hash::needsRehash(Auth::user()->password);
        return view('UserDash',['data'=>$data,'pass'=>$pass]);
    }
}
