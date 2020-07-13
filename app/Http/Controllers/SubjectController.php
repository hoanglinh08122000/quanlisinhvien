<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Discipline;
use DB;
use Illuminate\Http\Request;

class SubjectController extends Controller {
	public function show_subject(Request $rq) {
		$search = $rq->search;
		$array_list = Subject::where('name', 'like', "%$search%")->paginate(4);
		return view('subject.show_subject', [
			'array_list' => $array_list,
			'search' => $search,
		]);
	}

	public function view_insert_subject() {
		$get_teacher = Teacher::all();
        $get_discipline = Discipline::all();
		return view('subject.view_insert_subject', [
			'get_teacher' => $get_teacher,
            '$get_discipline' => $get_discipline
		]);}

	public function process_insert_subject(Request $rq) {

		Subject::create($rq->all());

		return redirect()->route('subject.show_subject');

	}
	// public function delete($id)
	// {

	//     Students::find($id)->delete();
	// 	return redirect()->route('students.show_students');

	// }
	// public function view_update_students($id){

	//     $students= Students::find($id);
	// 	return view('students.view_update_students',[
	// 		'students'=> $students,
	// 	]);

	// }
	// public function process_update_students(Request $rq,$id){
	//     $name    = $rq->name;
	//     $date    = $rq->date;
	//     $address = $rq->address;
	//     $gender  = $rq->gender;
	//     // $email   = $rq->email;
	//     $phone   = $rq->phone;

	//     $password = $rq->password;
	// 	DB::table('students')->where('id',$id)->update([
	// 		'name'=> $name,
	// 		'date'=> $date,
	// 		'address'=> $address,
	// 		'gender'=> $gender,
	//         // 'email' => $email,
	//         'phone' => $phone,

	//         'password' => $password,
	// 	]);
	//     // SinhVienLop::find($id)->update($rq->all());

	// 	return redirect()->route('students.show_students');
	// }
}
