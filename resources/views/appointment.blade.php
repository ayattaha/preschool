@extends('layouts.main')

@push('pageName')
Appointment
 @endpush

 @section('content')
 <!-- Page Header End -->
@include('includes.header')
 <!-- Page Header End -->

 <!-- Appointment Start -->
@include('includes.appointment')
<!-- Appointment End -->
 
@endsection