@extends('layouts.dashboardMain')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage <small>child</small></h3>
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
                    <h2>List of child</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Child Name</th>
						  <th>Child Birth date</th>
                          <th>Parent Phone</th>
						  <th>parent email</th>
						  <th>Address</th>
                          <th>Active</th>
                          <th>Image</th>
                          <th>Edit</th>
                          <th>Show</th>
						  <th>Delete</th>
                        </tr>
                      </thead>


                      <tbody>
                          
                     @foreach($children  as $child)
                        <tr>
						<td>{{ $child->childName }}</td>
                        <td>{{ $child->birthdate }}</td>
                        <td>{{ $child->parentphone }}</td>
                        <td>{{ $child->parentemail }}</td>
                        <td>{{ $child->address }}</td>
                        <td>{{ $child->active ? 'Yes' : 'No' }}</td>
                        <td> {{ $child->image }}</td>
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