@extends('layouts.dashboardMain')

@section('content')


			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Add Teacher</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<div class="container">
<form action="{{ route('insertTeacher') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <label for="teacherName">Teacher name:</label><br>
  <p color="red">@error('teacherName')
{{ $message }}
@enderror</p>
  <input type="text"  name="teacherName" value="{{ old('teacherName') }}"class="form-control"><br>
  
  <label for="phone">phone:</label><br>
  <p color="red">@error('phone')
{{ $message }}
@enderror</p>
  <input type="text"  name="phone" value="{{ old('phone') }}"class="form-control"><br>
  
  <label for="email">email:</label><br>
  <input type="email"  name="email" value="{{ old('email') }}"class="form-control"><br>
  <p color="red">@error('email')
{{ $message }}
@enderror</p>
 
<label for="teacherSpeciality">teacherSpecialityite:</label><br>
  <input type="text"  name="teacherSpeciality" value="{{ old('teacherSpeciality') }}" class="form-control"><br><br>
  <p color="red">@error('teacherSpeciality')
{{ $message }}
@enderror</p>

<label for="facebook">facebook:</label><br>
<input type="text"  name="facebook" value="{{ old('facebook') }}" class="form-control"><br><br>
<p color="red">@error('facebook')
{{ $message }}
@enderror</p>

<label for="tweeter">Twitter:</label><br>
<input type="text"  name="tweeter" value="{{ old('tweeter') }}" class="form-control"><br><br>
<p color="red">@error('tweeter')
{{ $message }}
@enderror</p>

<label for="instgrame">Instagram:</label><br>
<input type="text"  name="instgrame" value="{{ old('instgrame') }}" class="form-control"><br><br>
<p color="red">@error('instgrame')
{{ $message }}
@enderror</p>

    <label for="active">Active:</label><br>
     <input type="checkbox" id="active" name="active" class="form-control"value="1"{{ old('active') ? 'checked' : '' }}><br><br>
     <p color="red">@error('active')
{{ $message }}
@enderror</p>

<label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control" enctype="multipart/form-data"><br><br>
 
	<input type="submit" value="Submit">
</form> 
</div>					</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->


@endsection