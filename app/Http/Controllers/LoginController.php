<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Admin;
use App\Models\Teacher;
use Session;
use Hash;

class LoginController extends Controller
{
    public function login(){
    	return view('login.login');
    }

    // login students
    public function login_student(){
        return view('login.login_student');
    }
    public function process_login_student(Request $rq){
       $student = Students::where('email',$rq->email)->first(); 
        if (isset($student) && Hash::check($rq->password, $student->password)){
    		Session::put('id',$student->id);
    		Session::put('name',$student->name);
            Session::put('level',$student->level);

    		
    		return redirect()->route('index');

    	}else{
    		return redirect()->route('login')->with('error','Sai');
    	}
    }

    // login admin
    public function login_admin(){
        return view('login.login_admin');
    }
    public function process_login_admin(Request $rq){
       $student = Admin::where('email',$rq->email)->first();
        
        if (isset($student) && Hash::check($rq->password, $student->password)){
            Session::put('id',$student->id);
            Session::put('name',$student->name);
            Session::put('level',$student->level);

          
            return redirect()->route('index');

        }else{
            return redirect()->route('login')->with('error','Sai');
        }
    }

    // login teacher
    public function login_teacher(){
        return view('login.login_teacher');
    }
    public function process_login_teacher(Request $rq){
       $teacher = Teacher::where('email',$rq->email)->first(); 
       

        if (isset($teacher) && Hash::check($rq->password, $teacher->password)){
            Session::put('id',$teacher->id);
            Session::put('name',$teacher->name);
            Session::put('level',$teacher->level);

            
            return redirect()->route('index');

        }else{
            return redirect()->route('login');
        }
    }

    // log out
    public function logout(){
    	Session::flush();
    	
    	return redirect()->route('login')->with('sussess','Bye');
    	
    }

    


}
