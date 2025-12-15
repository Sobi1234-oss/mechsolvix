@extends('layouts.app')

@section('title', 'MechSolvix Unified Services')

@section('content')
    <!-- Carousel Start!-->
    @include('layouts.header')
      @include('layouts.carousel')





  @include('partials.about')

 @include('partials._expertise_section')
 @include('partials.services')
 @include('partials.news')

  @include('partials.facts')

 @include('partials.clients')


     @include('partials.hseq')


@include('partials.trusted')
@include('partials.gallery')
@include('partials.faq')
@include('partials.testimonials')
@endsection
