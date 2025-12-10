<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/services', function () {
    return view('pages.service');
});

Route::get('/projects', function () {
    return view('pages.project');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/testimonials', function () {
    return view('pages.testimonial');
});

Route::get('/404', function () {
    return view('pages.404');
});

// Dynamic service detail route: if a specific view exists under resources/views/services/{slug}.blade.php
// it will be returned. Otherwise a generic detail view is used and passed a small metadata map.
Route::get('/services/{slug}', function ($slug) {
    $viewPath = resource_path('views/services/' . $slug . '.blade.php');
    if (file_exists($viewPath)) {
        return view('services.' . $slug);
    }

    $meta = [
        'catalyst-handling' => [
            'title' => 'Catalyst Handling',
            'hero' => '/img/services/catalyst.jpg',
            'summary' => 'Specialized catalyst loading, unloading and screening services.'
        ],
        'vacuuming' => [
            'title' => 'Vacuuming Services',
            'hero' => '/img/services/vacuuming.jpg',
            'summary' => 'High-power industrial vacuuming for catalysts and hazardous materials.'
        ],
        'flare-maintenance' => [
            'title' => 'Flare Maintenance & Repairs',
            'hero' => '/img/services/flare.jpg',
            'summary' => 'Inspection, repair and servicing for elevated and ground flares.'
        ],
        // add more small metadata entries here as needed
    ];

    $data = $meta[$slug] ?? ['title' => ucwords(str_replace(['-','_'], ' ', $slug)), 'hero' => '/img/services/default-hero.jpg', 'summary' => 'Service details coming soon.'];
    return view('services.detail', ['slug' => $slug, 'meta' => $data]);
});

// News & Events Routes
Route::get('/our-clients', function () {
    return view('pages.clients');
})->name('our-clients');

Route::get('/news/{id}', function ($id) {
    // For detailed news view
    return view('pages.news-details', ['id' => $id]);
})->name('news.details');
