<footer class="site-footer">
    <div class="site-footer__top">
        <a class="brand brand--footer" href="{{ route('home', [], false) }}">
            <svg class="brand__mark" viewBox="0 0 46 46" aria-hidden="true" fill="none">
                <rect x="1" y="1" width="44" height="44" rx="13" fill="#E05A3A" />
                <path d="M10 29h10.5c4.8 0 6.5-11 12.5-11H37" stroke="#FBF8F1" stroke-width="2.6" stroke-linecap="round" />
                <circle cx="10" cy="29" r="3" fill="#FBF8F1" />
                <circle cx="37" cy="18" r="3" fill="#FBF8F1" />
            </svg>
            <span class="brand__name">MILEPOST<span>JAPAN → KENYA</span></span>
        </a>
        <p>A clearer route from the auction floor to your driveway.</p>
        <a class="footer-link" href="{{ route('home', [], false) }}#request">Talk through a car <span aria-hidden="true">↗</span></a>
    </div>
    <div class="site-footer__bottom">
        <p>Illustrative estimates and sample journeys are not quotes or live order tracking. Confirm vehicle eligibility, final valuation, duties, shipping and written payment terms before bidding.</p>
        <span>© {{ date('Y') }} {{ config('brand.name') }} · Japan to Kenya</span>
    </div>
</footer>
