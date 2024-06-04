@extends('layouts.main')

@push('pageName')
Testimonial
 @endpush

 @section('content')

 @include('includes.header')
 
 <!-- Testimonial Start -->
 @include('includes.test')
 <!-- Testimonial End -->
 
 @endsection