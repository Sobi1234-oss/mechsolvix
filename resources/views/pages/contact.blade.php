@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Page Header Start -->
 <div class="container-fluid page-header py-5" style="
    background: linear-gradient(rgba(0, 78, 141, 0.8), rgba(0, 78, 141, 0.8)),
                url('img/callbg.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-3 mt-5">Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">Contacct Us</li>
            </ol>
        </nav>
    </div>
</div>

    <!-- Page Header End -->





   @include("partials.testimonials")
   <style> @media (max-width: 768px) {
    .page-header {
        background-attachment: scroll !important;
        background-position: center !important;
        background-size: cover !important;
    }
}</style>
@endsection
