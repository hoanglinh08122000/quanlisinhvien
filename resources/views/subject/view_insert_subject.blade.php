@extends('layouts.master')
@section('content')
	
	<div class="card"  >
		<div class="card-header" >
			<strong>Thêm Môn học</strong> 
		</div>
		<div class="card-body card-block" >
			<form action="{{ route('students.process_insert_students') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
				@csrf
				
			
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>
					<div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
				</div>
				
			
				<div class="row form-group">
					<div class="col col-md-3"><label for="select" class=" form-control-label">Giáo viên</label></div>
					<div class="col-12 col-md-9">
						<select name="op_disciline" class="form-control">
							@foreach ($get_teacher  as $key => $teacher)
							    <option value="{{ $key }}">
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
		
	</div>
	

@endsection
