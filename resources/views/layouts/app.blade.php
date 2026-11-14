<!doctype html>
<html lang="en" data-whatsapp-number="{{ config('brand.whatsapp') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f3f0e7">
    <meta name="description" content="{{ $seoDescription ?? 'A clear route from Japanese car auctions to Kenya.' }}">
    <meta name="keywords" content="import car from Japan Kenya, Japanese auction cars Kenya, car import Mombasa, landed cost estimate Kenya">
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}">
    <title>{{ $seoTitle ?? config('brand.name') }}</title>
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('brand.name') }}">
    <meta property="og:title" content="{{ $seoTitle ?? config('brand.name') }}">
    <meta property="og:description" content="{{ $seoDescription ?? 'A clear route from Japanese car auctions to Kenya.' }}">
    <meta name="twitter:card" content="{{ config('brand.social_image_url') ? 'summary_large_image' : 'summary' }}">
    <meta name="twitter:title" content="{{ $seoTitle ?? config('brand.name') }}">
    <meta name="twitter:description" content="{{ $seoDescription ?? 'A clear route from Japanese car auctions to Kenya.' }}">
    @if (config('brand.canonical_url'))
        <link rel="canonical" href="{{ config('brand.canonical_url') . request()->getPathInfo() }}">
        <meta property="og:url" content="{{ config('brand.canonical_url') . request()->getPathInfo() }}">
    @endif
    @if (config('brand.social_image_url'))
        <meta property="og:image" content="{{ config('brand.social_image_url') }}">
        <meta name="twitter:image" content="{{ config('brand.social_image_url') }}">
    @endif
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</body>
</html>
