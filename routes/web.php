<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Preschool;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\RoomController;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[Preschool :: class,'home'])->name('home');

Route::get('about',[Preschool :: class,'about'])->name('about');

Route::get('classes',[Preschool :: class,'classes'])->name('classes');

Route::get('appointment',[Preschool :: class,'appointment'])->name('appointment');

Route::get('contact',[Preschool :: class,'contactUs'])->name('contactUs');

Route::get('becomeTeacher',[Preschool :: class,'becomeTeacher'])->name('becomeTeacher');

Route::get('error',[Preschool :: class,'error'])->name('error');

Route::get('testimonial',[Preschool :: class,'testimonial'])->name('testimonial');

Route::get('team',[Preschool :: class,'team'])->name('team');

Route::get('facility',[Preschool :: class,'facility'])->name('facility');

//dashboard rout

Route::get('admin/dashboard',[Preschool :: class,'dashboard'])->name('dashboard');

// route for teachers
Route::get('admin/showteacher',[TeacherController :: class,'showAllTeachers'])->name('showAllTeachers');

Route::get('admin/add teacher',[DashboardController :: class,'addTeacher'])->name('addTeacher');

Route::post('admin/insertTeacher',[TeacherController :: class,'store'])->name('insertTeacher');

// route for child
Route::get('admin/child',[ChildController :: class,'showchilds'])->name('showchilds');

Route::get('admin/addchild',[ChildController :: class,'addchild'])->name('addchild');

Route::post('admin/insertChild',[ChildController :: class,'insertChild'])->name('insertChild');


// route for Room 'Class'
Route::get('admin/class',[RoomController :: class,'showclass'])->name('showclass');

Route::get('admin/addclass',[RoomController :: class,'addclass'])->name('addclass');

Route::post('admin/insertclass',[RoomController :: class,'insertclass'])->name('insertclass');

Auth::routes();

Route::get('admin/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
