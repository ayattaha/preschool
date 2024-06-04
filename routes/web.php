<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Preschool;

Route::get('/', function () {
    return view('home');
});
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