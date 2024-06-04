@extends('layouts.main')

@push('pageName')
Facilities
 @endpush

 
 @section('content')

 <!-- Page Header End -->
@include('includes.header')
<!-- Page Header End -->

<!-- Facilities Start -->
@include('includes.facility')
<!-- Facilities End -->

 @endsection