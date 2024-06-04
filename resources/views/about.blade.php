@extends('layouts.main')
 
@push('pageName')
 About Us
 @endpush
 
 @section('content')

 <!-- Page Header End -->
@include('includes.header')
 <!-- Page Header End -->
<!-- About Start -->
@include('includes.about')
 <!-- About End -->

 <!-- Call To Action Start -->
 @include('includes.call')
<!-- Call To Action End -->

<!-- Team Start -->
@include('includes.team')
 <!-- Team End -->

 @endsection