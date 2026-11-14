@extends('layouts.app')

@section('content')
<main id="main-content">
    <section class="hero-section page-gutter" aria-labelledby="hero-title">
        <div class="hero-copy">
            <p class="eyebrow"><span class="eyebrow__line"></span> JAPAN AUCTIONS <span class="eyebrow__arrow">→</span> KENYA</p>
            <h1 id="hero-title">Find your car.<br><span>Know the full route.</span></h1>
            <p class="hero-copy__intro">We help you source a car from Japan and bring it through Mombasa. You see the bid ceiling, the cost stages and the journey before you commit.</p>
            <div class="hero-actions">
                <a class="button button--primary" href="#cost-estimator">Estimate the full cost <span aria-hidden="true">↗</span></a>
                <a class="text-link" href="{{ route('journey.example', [], false) }}">See a sample journey <span aria-hidden="true">→</span></a>
            </div>
            <div class="hero-deposit-note">
                <span class="hero-deposit-note__stamp">01<br>BID</span>
                <p><strong>KES 300,000 to start bidding.</strong><br>After a win, the vehicle and shipping are paid next. Duty is handled when the car reaches Mombasa.</p>
            </div>
        </div>
        <div class="hero-visual">
            <img src="/manus-storage/async-images/T9aI4bfPUzbhVRkapTOLXW/image-1.webp" alt="A silver vehicle at a Japanese export port, shown as an illustrative image" fetchpriority="high">
            <div class="hero-visual__top"><span class="demo-tag"><i aria-hidden="true"></i> ILLUSTRATIVE IMAGE</span><span>EXPORT LANE / JP—KE</span></div>
            <div class="hero-photo-card">
                <span class="manifest-label">THE PROMISE</span>
                <strong>Clear costs.<br>Visible progress.</strong>
                <span class="hero-photo-card__route"><span>JAPAN</span><i aria-hidden="true"></i><span>MOMBASA</span></span>
            </div>
            <div class="hero-visual__caption"><span>01 / SOURCING</span><span>Vehicle shown is illustrative, not available stock.</span></div>
        </div>
    </section>

    <section class="confidence-strip page-gutter" aria-label="What buyers can expect">
        <div><span class="confidence-strip__index">01</span><p><strong>Agree the bid ceiling</strong><span>You approve the limit before a bid is placed.</span></p></div>
        <div><span class="confidence-strip__index">02</span><p><strong>See costs in stages</strong><span>Vehicle, shipping and Mombasa costs are separated.</span></p></div>
        <div><span class="confidence-strip__index">03</span><p><strong>Follow the paper trail</strong><span>Milestones and documents make progress visible.</span></p></div>
    </section>

    <section class="process-section section-pad page-gutter" id="process" aria-labelledby="process-title">
        <div class="section-heading section-heading--split">
            <div>
                <p class="eyebrow"><span class="eyebrow__line"></span> THE ROUTE, IN PLAIN KES</p>
                <h2 id="process-title">Four stages.<br><span>No mystery payments.</span></h2>
            </div>
            <p class="section-heading__aside">You are not paying for a car-yard stock item. You are commissioning a bid, then funding the vehicle, shipping and Kenya-side costs at separate points.</p>
        </div>

        <div class="payment-route">
            <div class="payment-route__rail" aria-hidden="true"><span></span></div>
            <article class="payment-stop payment-stop--first">
                <div class="payment-stop__number">01</div>
                <div class="payment-stop__content">
                    <span class="manifest-label">BEFORE THE AUCTION</span>
                    <h3>Set your brief and bid limit</h3>
                    <p>Choose the vehicle, review the estimate and agree the maximum bid. The <strong>KES 300,000 bidding payment</strong> is made before bidding starts.</p>
                </div>
                <div class="payment-stop__amount"><span>TO START BIDDING</span><strong>KES 300,000</strong></div>
            </article>
            <article class="payment-stop">
                <div class="payment-stop__number">02</div>
                <div class="payment-stop__content">
                    <span class="manifest-label">WHEN THE BID WINS</span>
                    <h3>Pay for the car and shipping</h3>
                    <p>Once the approved bid wins, the full vehicle balance and agreed shipping costs are paid for export from Japan.</p>
                </div>
                <div class="payment-stop__amount"><span>AFTER A WIN</span><strong>Vehicle + ship</strong></div>
            </article>
            <article class="payment-stop">
                <div class="payment-stop__number">03</div>
                <div class="payment-stop__content">
                    <span class="manifest-label">ON ARRIVAL IN MOMBASA</span>
                    <h3>Settle duty and clearance</h3>
                    <p>Kenya duty and port/clearing charges are shown separately from the Japan purchase and freight. Final duty is confirmed against the vehicle and current KRA valuation.</p>
                </div>
                <div class="payment-stop__amount"><span>AT THE PORT</span><strong>Duty + clear</strong></div>
            </article>
            <article class="payment-stop payment-stop--last">
                <div class="payment-stop__number">04</div>
                <div class="payment-stop__content">
                    <span class="manifest-label">AFTER CLEARANCE</span>
                    <h3>Collect in Mombasa or arrange delivery</h3>
                    <p>Choose pickup or request delivery to your location. Any delivery charge is agreed before you instruct it.</p>
                </div>
                <div class="payment-stop__amount"><span>HANDOVER</span><strong>Your choice</strong></div>
            </article>
        </div>
        <p class="terms-note"><span aria-hidden="true">!</span> Exact deposit application/refund terms, bid deadlines and charges belong in a signed bidding mandate and written quote. This website demo does not invent those terms.</p>
    </section>

    <section class="estimate-section section-pad page-gutter" id="cost-estimator" aria-labelledby="estimate-title">
        <div class="section-heading section-heading--estimate">
            <div>
                <p class="eyebrow eyebrow--light"><span class="eyebrow__line"></span> COST DESK / KES</p>
                <h2 id="estimate-title">See the whole<br><span>number, line by line.</span></h2>
            </div>
            <div class="estimate-section__copy">
                <p>Change the sample figures to match a car you are considering. Each line is editable. Add a yard's written price if you want a like-for-like comparison.</p>
                <p><strong>Comparison note:</strong> The business's stated saving of about 25% versus car-yard prices is not guaranteed. Compare this estimate with a written quote for the same vehicle specification.</p>
                <p><strong>Example commission:</strong> The line starts at approximately KES 100,000, based on the business's stated per-car commission. It is an editable planning figure, not a confirmed fee; check the written quote.</p>
                <span class="estimate-caveat"><i aria-hidden="true"></i> Planning estimate only · not a quote or duty assessment</span>
            </div>
        </div>
        <div class="estimator-frame">
            <div class="estimator-frame__meta"><span>IMPORT COST WORKSHEET</span><span>DEMO VALUES / EDIT ANY LINE</span></div>
            <div data-widget="cost-estimator" class="estimator-mount">
                <div class="estimator-fallback"><strong>Indicative estimate</strong><p>Turn on JavaScript to edit the example costs. Confirm the vehicle-specific duty and final charges before bidding.</p></div>
            </div>
            <div class="estimator-frame__foot"><span>01 / CHANGE THE SAMPLE VALUES</span><span>02 / ASK FOR A WRITTEN QUOTE</span><span>03 / APPROVE BEFORE BIDDING</span></div>
        </div>
    </section>

    <section class="journey-section section-pad page-gutter" id="journey" aria-labelledby="journey-title">
        <div class="section-heading section-heading--split">
            <div>
                <p class="eyebrow"><span class="eyebrow__line"></span> EVERY MILESTONE, SHOWN</p>
                <h2 id="journey-title">From auction floor<br><span>to handover day.</span></h2>
            </div>
            <div class="journey-intro">
                <p>A real order view should show where the vehicle is, what has happened and which document confirms it. This sample is a walkthrough only; no live orders are connected.</p>
                <a class="text-link" href="{{ route('journey.example', [], false) }}">Open the sample journey <span aria-hidden="true">↗</span></a>
            </div>
        </div>
        <div class="journey-feature">
            <div class="journey-feature__image">
                <img src="/manus-storage/async-images/T9aI4bfPUzbhVRkapTOLXW/image-2.webp" alt="Cars secured inside a roll-on roll-off vessel, shown as an illustrative image" loading="lazy">
                <span class="image-corner-label">EXAMPLE SHIPPING STAGE</span>
            </div>
            <div class="journey-feature__timeline">
                <div class="journey-feature__topline"><span class="manifest-label">SAMPLE ORDER / FOR DEMONSTRATION</span><span class="demo-tag demo-tag--plain"><i aria-hidden="true"></i> NOT LIVE</span></div>
                <h3>2020 Toyota Harrier</h3>
                <p class="journey-feature__spec">2.0L petrol <span>·</span> Example vehicle only</p>
                <div data-widget="journey-timeline" data-compact="true" class="timeline-mount">
                    <ol class="timeline-fallback">
                        <li><span class="timeline-fallback__dot"></span><div><strong>Bid approved and won</strong><span>Example milestone</span></div></li>
                        <li><span class="timeline-fallback__dot"></span><div><strong>Export checks complete</strong><span>Example milestone</span></div></li>
                        <li class="timeline-fallback__active"><span class="timeline-fallback__dot"></span><div><strong>At sea to Mombasa</strong><span>Illustrative status</span></div></li>
                    </ol>
                </div>
                <a class="text-link" href="{{ route('journey.example', [], false) }}">See all sample milestones <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="paperwork-section section-pad page-gutter" aria-labelledby="paperwork-title">
        <div class="paperwork-heading">
            <p class="eyebrow"><span class="eyebrow__line"></span> THE PAPER TRAIL</p>
            <h2 id="paperwork-title">Proof should travel<br><span>with the car.</span></h2>
            <p>At each stage, ask for the document that shows what has happened. The exact paperwork depends on the vehicle and point in the import process.</p>
            <a class="text-link" href="{{ route('home', [], false) }}#request">Ask what you will receive <span aria-hidden="true">↗</span></a>
        </div>
        <div class="document-stack" aria-label="Example of documents shared during an import">
            <div class="document-card document-card--back"><span class="document-card__corner">EXAMPLE</span><span class="document-card__icon">03</span><strong>Bill of lading</strong><small>Vessel and shipment reference</small></div>
            <div class="document-card document-card--middle"><span class="document-card__corner">EXAMPLE</span><span class="document-card__icon">02</span><strong>Roadworthiness certificate</strong><small>Inspection record before export</small></div>
            <div class="document-card document-card--front"><span class="document-card__corner">ILLUSTRATIVE LIST</span><span class="document-card__icon">01</span><strong>Auction sheet</strong><small>Vehicle condition notes and grade</small></div>
            <p class="document-stack__caption">Illustrative document names · originals and identifiers must match your vehicle.</p>
        </div>
    </section>

    <section class="request-section section-pad page-gutter" id="request" aria-labelledby="request-title">
        <div class="request-copy">
            <p class="eyebrow eyebrow--light"><span class="eyebrow__line"></span> YOUR NEXT STEP</p>
            <h2 id="request-title">Start with the<br><span>car you want.</span></h2>
            <p>Tell us your budget and must-haves. You will see the message before it leaves this page. This demo does not save your details or take payment.</p>
            <div class="request-copy__callout"><span class="request-copy__symbol">↗</span><p><strong>One useful first conversation.</strong><br>We'll start with your budget, target model and ideal timeline.</p></div>
        </div>
        <div data-widget="vehicle-request" data-whatsapp-number="{{ config('brand.whatsapp') }}" class="request-form-mount">
            <noscript><p class="no-script-note">Enable JavaScript to prepare your vehicle request. No payment is collected on this site.</p></noscript>
        </div>
    </section>

    <section class="faq-section section-pad page-gutter" aria-labelledby="faq-title">
        <div class="faq-heading">
            <p class="eyebrow"><span class="eyebrow__line"></span> BEFORE YOU BID</p>
            <h2 id="faq-title">Good questions.<br><span>Clear answers.</span></h2>
        </div>
        <div class="faq-list">
            <details><summary>What does the KES 300,000 cover?<span aria-hidden="true">+</span></summary><p>It is the bidding payment collected before your car is bid on. The signed bidding mandate should say exactly how it is applied, and what happens if no vehicle is won or a winning bid is not completed. Confirm these terms before transferring funds.</p></details>
            <details><summary>Do I pay the full car price before it ships?<span aria-hidden="true">+</span></summary><p>After a successful bid, the customer pays for the vehicle in full along with the agreed shipping costs so the car can proceed through export and shipping. Your written quote should show these amounts separately.</p></details>
            <details><summary>When do I pay duty?<span aria-hidden="true">+</span></summary><p>Duty and Kenya-side clearance are handled when the vehicle arrives in Mombasa. The final amount depends on the vehicle details and current KRA valuation, so a web estimate is not a customs assessment.</p></details>
            <details><summary>Is the sample vehicle tracking live?<span aria-hidden="true">+</span></summary><p>No. The vehicle and its milestones are illustrative examples. This frontend demo is not connected to a live shipment system.</p></details>
        </div>
    </section>
</main>
@endsection
