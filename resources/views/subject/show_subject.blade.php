@extends('layouts.master')
@section('content')

{{-- <a href="{{ route('students.view_insert_students') }}">
	Add

</a> --}}

<table class="table">
	<tr>
		<th >Id</th>
		<th scope="col">Tên môn học</th>
		<th scope="col">Thời gian</th>
		{{-- <th scope="col"> Giáo viên dạy</th> --}}

		<th></th>
		<th></th>
		</tr>

		<tbody>


			@foreach ($array_list as $subject)
			<tr>
				<th >
					{{$subject->id}}
				</td>
				<td>
					{{$subject->name}}
				</td>

				<td>
					<a href="{{ route('subject.delete',['id' => $subject->id]) }}">
						Delete
					</a>
				</td>

				<td>
					<a href="{{ route('subject.view_update_students',['id' => $subject->id]) }}">
						Update
					</a>
				</td>

			</tr>

			@endforeach
			<br>
	{{-- <input type="search" placeholder="search..." name="search" value="{{ $search }}" style="float:right;border-radius: 10px;">
	<button type="submit"></button> --}}

</tbody>
</table>
{{$array_list->appends(['search' => $search])->links()}}
@endsection