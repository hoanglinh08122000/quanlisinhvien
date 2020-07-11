<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Course;

class CourseController extends Controller
{
    public function show_course(Request $rq){
        $search = $rq->search;
    	$array_list = Course::where('name','like',"%$search%")->paginate(10);
        return view('course.show_course',[
         'array_list'=> $array_list,
         'search'=> $search
        ]);

    }
    public function view_insert_course(){
    	return view('course.insert');
    }
    public function process_insert_course(Request $rq){
    	
        
        Course::create($rq->all()); 

    	return redirect()->route('course.show_course');

    }
    public function delete($id)
    {


        Course::find($id)->delete();
    	return redirect()->route('course.show_Course');

    }
    public function view_update_course($id){
    	
        $course= Course::find($id);
    	return view('course.edit',[
    		'course'=> $course,
    	]);

    }
    public function process_update_Course(Request $rq,$id){
        $name    = $rq->name;
        DB::table('course')->where('id',$id)->update([
    		'name'=> $name,
    	]);
        // SinhVienLop::find($id)->update($rq->all());
       
    	return redirect()->route('course.show_course');
    }
}
