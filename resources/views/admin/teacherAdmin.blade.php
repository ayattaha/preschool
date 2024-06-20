@extends('layouts.dashboardMain')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage <small>Teachers</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
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
                    <h2>List of Teachers</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Teacher Name</th>
						  <th>Phone</th>
                          <th>Email</th>
						  <th>Teacher specialty</th>
						  <th>Active</th>
                          <th>Image</th>
                          <th>Face Book</th>
						  <th>Tweeter</th>
						  <th> Instgrame</th>
                          <th>Edit</th>
                          <th>Show</th>
						  <th>Delete</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                     @foreach($teachers as $teacher)
                        <tr>
						<td>{{ $teacher->teacherName }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->teacherSpeciality }}</td>
                        <td>{{ $teacher->active ? 'Yes' : 'No' }}</td>
                        <td> {{ $teacher->image }}</td>
                        <td>{{ $teacher->facebook }}</td>
                        <td>{{ $teacher->tweeter }}</td>
                        <td>{{ $teacher->instgrame }}</td>
     					</tr>
	 				 @endforeach 
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
	
 @endsection