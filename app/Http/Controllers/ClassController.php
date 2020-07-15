<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discipline;
use DB;
use App\Models\Course;

class ClassController extends Controller
{
   public function show_class(Request $rq) {
        $search = $rq->search;
		$array_list = Subject::where('name', 'like', "%$search%")->paginate(4);
		return view('class.show_class', [
			'array_list' => $array_list,
			'search' => $search,
	       
		]);
	}

	public function view_insert_class() {
		$courses = Course::get();
        $disciplines = Discipline::get();
		return view('class.view_insert_class', [
         'courses' => $courses,
         'disciplines' => $disciplines,
     ]);
  }
    public function process_insert_class(Request $rq) {

      Subject::create($rq->all());

      return redirect()->route('class.show_class');

  }
//   public function delete($id)
//   {

//    Subject::find($id)->delete();
//    return redirect()->route('subject.show_subject');

// }
// public function view_update_subject($id){

//    $subject= Subject::find($id);
//    $teachers = Teacher::all();
//    $disciplines = Discipline::all();
//    return view('subject.view_update_subject',[
//      'subject'=> $subject,
//      'teachers' => $teachers,
//      'disciplines' => $disciplines,
    
//  ]);

// }
// public function process_update_subject(Request $rq,$id){
//    $name    = $rq->name;
//    $time   = $rq->time;
//    $id_discipline=$rq->id_discipline;
//    $id_teacher=$rq->id_teacher;
//    DB::table('subject')->where('id',$id)->update([
//      'name'=> $name,
//      'time'=> $time,
//      'id_discipline'=> $id_discipline,
//      'id_teacher' => $id_teacher,


//  ]);
// 	    // SinhVienLop::find($id)->update($rq->all());

//    return redirect()->route('subject.show_subject');
// }
}
