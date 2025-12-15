@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header-mechsolvix py-5" style="
    background: linear-gradient(rgba(36, 64, 95, 0.573), rgba(30, 86, 120, 0.5)),
                url('img/callbg.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    margin-top: -80px;
">
    <div class="container text-center py-3 py-md-5 mt-5"> <!-- mt-5 added for top margin -->
        <h1 class="display-4 display-lg-3 text-white mb-2 mb-md-3 mt-4 mt-md-5">Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Pages</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                    Contact Us
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

@include("partials.testimonials")

<style>
    /* Fix for header margin */
    .page-header-mechsolvix {
        position: relative;
        z-index: 1;
    }

    /* Mobile Responsive Styles */
    @media (max-width: 768px) {
        .page-header-mechsolvix {
            background-attachment: scroll !important;
            background-position: center center !important;
            background-size: cover !important;
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
            min-height: 50vh !important;
            margin-top: -60px !important; /* Less negative margin on mobile */
        }

        .container.text-center {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        h1.display-4.display-lg-3 {
            font-size: 2.5rem !important;
            line-height: 1.2 !important;
            margin-bottom: 0.5rem !important;
            margin-top: 2rem !important; /* Adjusted for mobile */
        }

        .breadcrumb {
            flex-wrap: nowrap !important;
            overflow-x: auto !important;
            padding: 0.5rem 0 !important;
            font-size: 0.875rem !important;
        }

        .breadcrumb::-webkit-scrollbar {
            display: none !important;
        }

        .breadcrumb-item {
            white-space: nowrap !important;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            padding: 0 0.5rem !important;
        }
    }

    /* Tablet Styles */
    @media (min-width: 769px) and (max-width: 1024px) {
        .page-header-mechsolvix {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
            min-height: 40vh !important;
            margin-top: -70px !important; /* Adjusted for tablet */
        }

        h1.display-4.display-lg-3 {
            font-size: 3rem !important;
        }
    }

    /* Very Small Mobile Devices */
    @media (max-width: 480px) {
        .page-header-mechsolvix {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
            min-height: 40vh !important;
            margin-top: -50px !important; /* Less negative margin on very small screens */
        }

        h1.display-4.display-lg-3 {
            font-size: 2rem !important;
            margin-top: 1.5rem !important;
        }

        .breadcrumb {
            font-size: 0.75rem !important;
        }

        .container.text-center {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
    }

    /* Large Desktop Styles */
    @media (min-width: 1400px) {
        .page-header-mechsolvix {
            min-height: 60vh !important;
            margin-top: -90px !important; /* More negative margin for large screens */
        }
    }

    /* Breadcrumb Link Hover Effect */
    .breadcrumb-item a:hover {
        opacity: 0.8 !important;
        text-decoration: underline !important;
    }
</style>
@endsection
