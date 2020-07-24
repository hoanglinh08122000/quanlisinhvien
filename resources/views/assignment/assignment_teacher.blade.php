@extends('layouts.master')
@section('content')

<div class="card"  >
	<div class="card-header" >
		<strong>Phân công theo giáo viên </strong> 
	</div>
	<div class="card-body card-block" >
		<form action="{{ route('teacher.process_insert_teacher') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
			@csrf
			<div class="row form-group">
				<div class="col col-md-3"><label for="select" class=" form-control-label">Khóa</label></div>
				<div class="col-12 col-md-9">
					<select name="id" class="form-control">
						@foreach ($courses  as $course)
						<option value="{{ $course->id }}">
							{{ $course->name }}
						</option>
						@endforeach
					</select>
				</div>

			</div>
			<div class="row form-group">
				<div class="col col-md-3"><label for="select" class=" form-control-label">Ngành</label></div>
				<div class="col-12 col-md-9">
					<select name="id" class="form-control">
						@foreach ($disciplines  as $discipline)
						<option value="{{ $discipline->id }}">
							{{ $discipline->name }}
						</option>
						@endforeach
					</select>
				</div>

			</div>

			<div class="row form-group">
				<div class="col col-md-3"><label for="select" class=" form-control-label">Lớp</label></div>
				<div class="col-12 col-md-9">
					<select name="id_class" class="form-control">
						@foreach ($classs  as $class)
						<option value="{{ $class->id }}">
							{{ $class->name }}
						</option>
						@endforeach
					</select>
				</div>

			</div>

			<div class="row form-group">
				<div class="col col-md-3"><label for="select" class=" form-control-label">Môn</label></div>
				<div class="col-12 col-md-9">
					<select name="id" class="form-control">
						@foreach ($subjects  as $subject)
						<option value="{{ $subject->id }}">
							{{ $subject->name }}
						</option>
						@endforeach
					</select>
				</div>

			</div>

			<div class="row form-group">
				<div class="col col-md-3"><label for="select" class=" form-control-label">Giáo viên</label></div>
				<div class="col-12 col-md-9">
					<select name="id" class="form-control">
						@foreach ($teachers  as $teacher)
						<option value="{{ $teacher->id }}">
							{{ $teacher->name }}
						</option>
						@endforeach
					</select>
				</div>

			</div>



			

			<button type="submit" class="btn btn-primary btn-sm" >
				<i class="fa fa-dot-circle-o"></i> Submit
			</button>
			<button type="reset" class="btn btn-danger btn-sm">
				<i class="fa fa-ban"></i> Reset
			</button>

		</form>
	</div>
		{{-- <div class="card-footer">
			
		</div> --}}
	</div>
	

	@endsection