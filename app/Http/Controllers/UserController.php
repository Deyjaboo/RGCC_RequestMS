<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
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
        $data = DB::table('users')->where('student_id', Auth::user()->student_id)->get();
        $pass1 = DB::table('users')->select('password')->where('student_id', Auth::user()->student_id)->get();
        // $pass =  $decrypted = Crypt::decryptString($pass1);
        // $encrypted = Crypt::encryptString('123456');
        // $pass = Crypt::decryptString($encrypted);
        $pass = Hash::make($pass1);
        // $pass = Hash::needsRehash(Auth::user()->password);
        return view('UserDash',['data'=>$data,'pass'=>$pass]);
    }

    public function update_student(Request $request, $id)
    {

        if($request->input('EditMiddleName') == ""){
            $MiddleName = " ";
        }else{
            $MiddleName = $request->input('EditMiddleName');
        }
        if($request->input('EditSuffix') == ""){
            $Suffix = " ";
        }else{
            $Suffix = $request->input('EditSuffix');
        }

            $StudentId = $request->input('EditStudentId');
            $FirstName = $request->input('EditFirstName');
            $LastName = $request->input('EditLastName');
            $MobileNumber = $request->input('EditMobileNumber');
            $Course = $request->input('EditCourse');
            $Year = $request->input('EditYear');
      
        DB::table('users')
        ->where('id', $id)
        ->update(array(
        'student_id' => $StudentId,
        'First_Name' => $FirstName,
        'Last_Name' => $LastName,
        'Middle_Name' => $MiddleName,
        'suffix' => $Suffix,
        'cp_num' => $MobileNumber,
        'course' => $Course,
        'year' => $Year,
        ));

        return redirect('dashboard')->with('message','Data updated successfully!');;
    }
}
