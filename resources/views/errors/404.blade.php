@extends('layouts.app')

@section('content')
<main id="main-content" class="not-found page-gutter">
    <p class="eyebrow"><span class="eyebrow__line"></span> ROUTE NOT FOUND / 404</p>
    <h1>This page took<br><span>a different route.</span></h1>
    <p>That address is not on this import route. Head back to the overview and start again.</p>
    <a class="button button--primary" href="{{ route('home', [], false) }}">Return to the overview <span aria-hidden="true">↗</span></a>
</main>
@endsection
