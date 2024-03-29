<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docrequest;
use DB;
use Auth;
use DateTime;
use Carbon\Carbon;
class DocrequestController extends Controller
{
    function store(Request $request){
        // $request->validate([
        //     'Hon_Dismissal' => ['required_without_all: SO, Diploma,TOR,Form137,GoodMoral'],
        //     'SO' => ['required_without_all: Hon_Dismissal, Diploma,TOR,Form137,GoodMoral'],
        //     'Diploma' => ['required_without_all: Hon_Dismissal, SO,TOR,Form137,GoodMoral'],
        //     'TOR' => ['required_without_all: Hon_Dismissal, SO,Diploma,Form137,GoodMoral'],
        //     'Form137' => ['required_without_all: Hon_Dismissal, SO,Diploma,TOR,GoodMoral'],
        //     'GoodMoral' => ['required_without_all: Hon_Dismissal, SO,Diploma,TOR,Form137'],
        // ]);
        if($request->input('Hon_Dismissal') != null or $request->input('SO') != null or $request->input('Diploma') != null or $request->input('TOR') != null or $request->input('Form137') != null or $request->input('GoodMoral') != null or
         $request->input('UnitEarned') != null or $request->input('Graduation') != null or $request->input('GWA') != null or $request->input('Grades') != null or
         $request->input('auth_Transcript') != null or $request->input('auth_SO') != null or $request->input('auth_Diploma') != null){ 
        //or $request->input('Enrollment') != null or $request->input('Employment') != null or $request->input('License_Exam') != null){
       
        $data = new Docrequest();
        $data->stud_id = auth()->user()->student_id;
        $data->Name = auth()->user()->Last_Name . ", ". auth()->user()->First_Name . " ". auth()->user()->Middle_Name[0] . auth()->user()->suffix;
        $data->Course = auth()->user()->course;

        $data->cp = auth()->user()->cp_num;
        // $data->date = $request->input('date');
        $createdAt = Carbon::parse(date('Y-m-d H:i:s'));
        $data->date = $createdAt->format('M d Y');
        // $data->date = date('Y-m-d H:i:s');
       
        if($request->input('Hon_Dismissal') != null){
            $data->HonDismissal = $request->input('Hon_Dismissal');
        }else{
            $data->HonDismissal = " ";
        }
        if($request->input('SO') != null){
            $data->Special_Order = $request->input('SO');
        }else{
            $data->Special_Order = " ";
        }
        if($request->input('Diploma') != null){
            $data->Diploma = $request->input('Diploma');
        }else{
            $data->Diploma = " ";
        }
        if($request->input('TOR') != null){
            $data->TOR = $request->input('TOR');
        }else{
            $data->TOR = " ";
        }
        if($request->input('Form137') != null){
            $data->Form137 = $request->input('Form137');
        }else{
            $data->Form137 = " ";
        }
        if($request->input('GoodMoral') != null){
            $data->GoodMoral = $request->input('GoodMoral');
        }else{
            $data->GoodMoral = " ";
        }
     
        if($request->input('UnitEarned') != null){
            $data->UnitEarned = $request->input('UnitEarned');
        }else{
            $data->UnitEarned = " ";
        }

        if($request->input('Graduation') != null){
            $data->Graduation = $request->input('Graduation');
        }else{
            $data->Graduation = " ";
        }
        
        if($request->input('GWA') != null){
            $data->GWA = $request->input('GWA');
        }else{
            $data->GWA = " ";
        }
        
        if($request->input('Grades') != null){
            $data->Grades = $request->input('Grades');
        }else{
            $data->Grades = " ";
        }
        if($request->input('auth_Transcript') != null){
            $data->Auth_Transcript = $request->input('auth_Transcript');
        }else{
            $data->Auth_Transcript = " ";
        }
       
        if($request->input('auth_SO') != null){
            $data->Auth_Special_Order = $request->input('auth_SO');
        }else{
            $data->Auth_Special_Order = " ";
        }

        if($request->input('auth_Diploma') != null){
            $data->Auth_Diploma = $request->input('auth_Diploma');
        }else{
            $data->Auth_Diploma = " ";
        }
        
        if($request->input('Enroll') != null){
             if($request->input('Employ') != null){
                if($request->input('License_Exam') != null){
                    $data->Purpose = $request->input('Enroll').", ".$request->input('Employ').", ".$request->input('License_Exam');
                }else{
                    $data->Purpose = $request->input('Enroll').", ".$request->input('Employ');
                }
             }
             else{
                if($request->input('License_Exam') != null){
                    $data->Purpose = $request->input('Enroll').", ".$request->input('License_Exam');
                }else{
                    $data->Purpose = $request->input('Enroll');
                }
             }
        }else{
            if($request->input('Employ') != null){
                if($request->input('License_Exam') != null){
                    $data->Purpose = $request->input('Employ').", ".$request->input('License_Exam');
                }else{
                    $data->Purpose = $request->input('Employ');
                }
             }
             else{
                if($request->input('License_Exam') != null){
                    $data->Purpose = $request->input('License_Exam');
                }else{
                    $data->Purpose = " ";
                }
             }
        }

        $data->Status = "New";
        $data->save();

        return redirect('UserReq')->with('message','Request Sent!');
    }else{
        return redirect('UserReq')->with('message1','Please Fill your Request Form!');
    }
    }
    
    function new_req(){
        $data = DB::table('docrequests')->where('Status', "New")->get();
        $new = DB::table('docrequests')->where('Status', "New")->count();
        $claimed = DB::table('docrequests')->where('Status', "Claimed")->count();
        $ready = DB::table('docrequests')->where('Status', "Ready")->count();

        return view('NewRequest',['data'=>$data,'new'=>$new ,'claimed'=>$claimed ,'ready'=>$ready]);
    }

    function claimed(){
        $data = DB::table('docrequests')->where('Status', "Done")->get();
        $new = DB::table('docrequests')->where('Status', "New")->count();
        $claimed = DB::table('docrequests')->where('Status', "Claimed")->count();
        $ready = DB::table('docrequests')->where('Status', "Ready")->count();

        return view('Claimed',['data'=>$data,'new'=>$new ,'claimed'=>$claimed ,'ready'=>$ready]);
    }

    function unclaimed(){
        $data = DB::table('docrequests')->where('Status', "Ready")->get();
        $new = DB::table('docrequests')->where('Status', "New")->count();
        $claimed = DB::table('docrequests')->where('Status', "Claimed")->count();
        $ready = DB::table('docrequests')->where('Status', "Ready")->count();

        return view('Unclaimed',['data'=>$data,'new'=>$new ,'claimed'=>$claimed ,'ready'=>$ready]);
    }
}
