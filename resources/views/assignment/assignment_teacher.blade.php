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
				<div class="col col-md-3"><label for="select" class=" form-control-label" >Ngành</label></div>
				<div class="col-12 col-md-9">
					<select name="id" class="form-control" id="select_discipline">
<<<<<<< HEAD
						<option>Chọn ngành</option>
=======
						<option disabled selected> Chon nganh</option>}
						
>>>>>>> master
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

			{{-- <div class="row form-group">
				<div class="col col-md-3"><label for="select" class=" form-control-label">Môn</label></div>
				<div class="col-12 col-md-9">
					<select name="id" class="form-control" id="ajax_subject>
						@foreach ($subjects  as $subject)
						<option value="{{ $subject->id }}">
							{{ $subject->name }}
						</option>
						@endforeach
					</select>
				</div>

			</div> --}}

			<div class="row form-group">
				<div class="col col-md-3"><label for="select" class=" form-control-label">Môn</label></div>
				<div class="col-12 col-md-9">
					<select name="id" class="form-control" id="select_subject">
						
					</select>
				</div>

			</div>

			<div class="row form-group">
				<div class="col col-md-3"><label for="select" class=" form-control-label">Giáo viên</label></div>
				<div class="col-12 col-md-9">
					<select name="id" class="form-control">
						@foreach ($teachers  as $teacher)
						<option value="{{ $teacher->id }}">
							{{ $teacher->full_name }}
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

<<<<<<< HEAD
	@section('script')
		<script>
			$(document).ready(function(){
				
				$("#select_discipline").change(function() {
					// var id_discipline= $(this).val();
					// $.get("ajax/subject/"+id_discipline,function(data){
					// 	$("#ajax_subject").html(data);
					

					});	
				});
			// });
		</script>
	@endsection
=======
	@push('js')
		<script>
			 $(document).ready(function() {
			 	$("#select_discipline").change(function(){
			 		var id = $(this).val();
			 		$("#select_subject").html('');
			 		$.ajax({
			 			url: '{{ route('ajax.assignment_teacher') }}',
			 			type: 'GET',
			 			dataType: 'json',
			 			data: {id : id},
			 		})
			 		.done(function(response) {
			 			$(response).each(function()
			 			{
			 				
			 				$("#select_subject").append(`
			 					<option value='${this.id}'>
									${this.name}
			 					</option>`)
			 			})
			 		})
			 		.fail(function() { 
			 			alert("sai roi")
			 		})
			 		
			 		
			 		
			 	})
			 });
		</script>
	@endpush
>>>>>>> master
