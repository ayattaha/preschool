@extends('layouts.main')

@section('content')
       <!-- Carousel Start -->
          @include('includes.carousel')       
        <!-- Carousel End -->    

        <!-- Facilities Start -->
        @include('includes.facility')
        <!-- Facilities End -->

        <!-- About Start -->
        @include('includes.about')
        <!-- About End -->

        <!-- Call To Action Start -->
        @include('includes.call')
        <!-- Call To Action End -->

        <!-- Classes Start -->
        @include('includes.class')
        <!-- Classes End -->

        <!-- Appointment Start -->
        @include('includes.appointment')
        <!-- Appointment End -->

        <!-- Team Start -->
        @include('includes.team')
        <!-- Team End -->

        <!-- Testimonial Start -->
        @include('includes.test')
        <!-- Testimonial End -->

        @endsection