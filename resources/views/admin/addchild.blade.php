@extends('layouts.dashboardMain')

@section('content')


			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Add Student</h3>
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
<form action="{{route('insertChild')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <label for="childName">Child Name:</label><br>
  <p color="red">@error('childName')
{{ $message }}
@enderror</p>
  <input type="text"  name="childName" value="{{ old('childName') }}"class="form-control"><br>
  
  <label for="birthdate">Child Birth date:</label><br>
  <p color="red">@error('birthdate')
{{ $message }}
@enderror</p>
  <input type="date"  name="birthdate" value="{{ old('birthdate') }}"class="form-control"><br>
  
  <label for="parentphone">Parent Phone:</label><br>
  <p color="red">@error('parentphone')
{{ $message }}
@enderror</p>
  <input type="text"  name="parentphone" value="{{ old('parentphone') }}"class="form-control"><br>
  
  <label for="parentemail">parent email:</label><br>
  <input type="email"  name="parentemail" value="{{ old('parentemail') }}"class="form-control"><br>
  <p color="red">@error('parentemail')
{{ $message }}
@enderror</p>
 
<label for="address">Address:</label><br>
  <input type="text"  name="address" value="{{ old('address') }}" class="form-control"><br><br>
  <p color="red">@error('address')
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