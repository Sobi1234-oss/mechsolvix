@extends('layouts.app')

@section('title', 'MechSolvix Unified Services')

@section('content')
    <!-- Carousel Start!-->
    @include('layouts.header')
      @include('layouts.carousel')
      @include('partials._expertise_section')




  @include('partials.about')
   @include('partials.services')
    <!-- About End -->
 @include('partials.news')

    <!-- Services Start -->



    @include('partials.clients')

     @include('partials.facts')
     @include('partials.hseq')










        @include('partials.testimonials')
@endsection
