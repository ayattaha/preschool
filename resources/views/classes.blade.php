@extends('layouts.main')

@push('pageName')
 Classes
 @endpush

 @section('content')

 <!-- Page Header End -->
@include('includes.header')
 <!-- Page Header End -->

 <!-- Classes Start -->
 @include('includes.class')
<!-- Classes End -->

<!-- Appointment Start -->
@include('includes.appointment')
<!-- Appointment End -->


 <!-- Testimonial Start -->
@include('includes.test')
<!-- Testimonial End -->
 @endsection
 
