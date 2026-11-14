<div class="notice-bar">
    <div class="notice-bar__inner">
        <span class="notice-bar__dot" aria-hidden="true"></span>
        <span>Frontend demo · sample content and branding are replaceable</span>
        <a href="{{ route('home', [], false) }}#cost-estimator">Try the editable estimate <span aria-hidden="true">↗</span></a>
    </div>
</div>
<header class="site-header">
    <div class="site-header__inner">
        <a class="brand" href="{{ route('home', [], false) }}" aria-label="Milepost Auto home">
            <svg class="brand__mark" viewBox="0 0 46 46" aria-hidden="true" fill="none">
                <rect x="1" y="1" width="44" height="44" rx="13" fill="#E05A3A" />
                <path d="M10 29h10.5c4.8 0 6.5-11 12.5-11H37" stroke="#FBF8F1" stroke-width="2.6" stroke-linecap="round" />
                <circle cx="10" cy="29" r="3" fill="#FBF8F1" />
                <circle cx="37" cy="18" r="3" fill="#FBF8F1" />
            </svg>
            <span class="brand__name">MILEPOST<span>JAPAN → KENYA</span></span>
        </a>
        <nav class="desktop-nav" aria-label="Main navigation">
            <a href="{{ route('home', [], false) }}#process">How it works</a>
            <a href="{{ route('home', [], false) }}#cost-estimator">Cost estimate</a>
            <a href="{{ route('journey.example', [], false) }}">Sample journey</a>
        </nav>
        <a class="button button--nav" href="{{ route('home', [], false) }}#request">Request a car <span aria-hidden="true">↗</span></a>
        <details class="mobile-nav">
            <summary aria-label="Open navigation menu"><span></span><span></span></summary>
            <nav aria-label="Mobile navigation">
                <a href="{{ route('home', [], false) }}#process">How it works</a>
                <a href="{{ route('home', [], false) }}#cost-estimator">Cost estimate</a>
                <a href="{{ route('journey.example', [], false) }}">Sample journey</a>
                <a href="{{ route('home', [], false) }}#request">Request a car</a>
            </nav>
        </details>
    </div>
</header>
