@extends('layouts.master')
@section('content')

{{-- <a href="{{ route('students.view_insert_students') }}">
	Add	

</a> --}}

<table class="table">
	<tr>
		<th >Id</th>
		<th>Name</th>
		<th></th>
		<th></th>
	</tr>
	<tbody>
	@foreach ($array_list as $course)
		<tr>
			<th >
				{{$course->id}}
			</td>
			<td>
				{{$course->name}}
			</td>
			<td>
				<a href="{{ route('course.delete',['id' => $course->id]) }}">
					Delete
				</a>
			</td>

			<td>
				<a href="{{ route('course.view_update_course',['id' => $course->id]) }}">
					Update
				</a>
			</td>

		</tr>
	@endforeach
	<br>
	</tbody>
</table>
{{$array_list->appends(['search' => $search])->links()}}
@endsection