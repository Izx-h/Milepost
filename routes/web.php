<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home', [
    'seoTitle' => 'Import a Japanese car to Kenya with a clear cost plan',
    'seoDescription' => 'Source a car from Japanese auctions with a clear bidding deposit, staged costs and a visible route from Japan to Mombasa and delivery.',
])->name('home');

Route::view('/journey/example', 'pages.journey-example', [
    'seoTitle' => 'See a sample Japan-to-Kenya car journey',
    'seoDescription' => 'Follow an illustrative car import timeline from bidding in Japan through vessel transit, Mombasa clearance and handover in Kenya.',
])->name('journey.example');

Route::fallback(function () {
    return response()->view('errors.404', [
        'seoTitle' => 'Page not found | Milepost Auto',
        'robots' => 'noindex, nofollow',
        'seoDescription' => 'The page you requested could not be found.',
    ], 404);
});
