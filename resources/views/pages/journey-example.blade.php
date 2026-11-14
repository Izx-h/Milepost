@extends('layouts.app')

@section('content')
<main id="main-content" class="journey-page page-gutter">
    <section class="journey-page__hero">
        <a class="back-link" href="{{ route('home', [], false) }}">← Back to the import overview</a>
        <div class="journey-page__header">
            <div>
                <p class="eyebrow"><span class="eyebrow__line"></span> CUSTOMER JOURNEY / DEMO</p>
                <h1>A car moves.<br><span>The updates move with it.</span></h1>
                <p class="journey-page__intro">This is a sample shipment timeline, not a live order. A real customer view should show the event, the latest update and the document that confirms it.</p>
            </div>
            <div class="journey-page__ticket">
                <span class="demo-tag demo-tag--plain"><i aria-hidden="true"></i> ILLUSTRATIVE ONLY</span>
                <strong>2020 Toyota<br>Harrier</strong>
                <span>2.0L petrol · example vehicle</span>
                <span class="journey-page__ticket-line"></span>
                <span class="journey-page__route">JAPAN <i aria-hidden="true">→</i> MOMBASA <i aria-hidden="true">→</i> KENYA</span>
            </div>
        </div>
    </section>

    <section class="journey-page__body" aria-labelledby="timeline-title">
        <div class="journey-page__visual">
            <img src="/manus-storage/async-images/T9aI4bfPUzbhVRkapTOLXW/image-2.webp" alt="Illustrative view of vehicles inside a roll-on roll-off vessel" loading="lazy">
            <div class="journey-image-note"><span class="journey-image-note__dot"></span><span>Sample status: at sea<br><strong>Transit timing varies by sailing and clearance.</strong></span></div>
        </div>
        <div class="journey-page__timeline-wrap">
            <div class="timeline-heading"><span class="manifest-label">EXAMPLE ORDER / NO LIVE DATA</span><h2 id="timeline-title">The import, step<br>by step.</h2></div>
            <div data-widget="journey-timeline" class="timeline-mount timeline-mount--full">
                <ol class="timeline-fallback timeline-fallback--full">
                    <li><span class="timeline-fallback__dot"></span><div><strong>Vehicle brief confirmed</strong><span>Example milestone</span></div></li>
                    <li><span class="timeline-fallback__dot"></span><div><strong>Bid approved and won</strong><span>Example milestone</span></div></li>
                    <li><span class="timeline-fallback__dot"></span><div><strong>Inspection and export paperwork</strong><span>Example milestone</span></div></li>
                    <li class="timeline-fallback__active"><span class="timeline-fallback__dot"></span><div><strong>Loaded and at sea</strong><span>Illustrative current stage</span></div></li>
                    <li><span class="timeline-fallback__dot"></span><div><strong>Arrives in Mombasa</strong><span>Next in this example</span></div></li>
                    <li><span class="timeline-fallback__dot"></span><div><strong>Duty, clearance and handover</strong><span>Final example milestones</span></div></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="journey-proof-band">
        <div><span class="manifest-label">WHAT A REAL UPDATE SHOULD INCLUDE</span><p>Milestone · date of update · vehicle identity · document or reference · next action</p></div>
        <a class="button button--primary" href="{{ route('home', [], false) }}#request">Request a car like this <span aria-hidden="true">↗</span></a>
    </section>
    <p class="journey-disclaimer">This page is a frontend sample. It is not tracking a real car, does not represent a promised shipping schedule, and does not create or update a customer order.</p>
</main>
@endsection
