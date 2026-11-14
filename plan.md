# Implementation plan

## Product and stack

Build a mobile-first public website for a Japan-to-Kenya car-import service. Use Laravel Blade for server-rendered public pages and Vue 3 components, bundled with Vite, for the interactive estimator, sample journey timeline, and enquiry flow. Keep the first version frontend-only: no customer accounts, database, real payment collection, live order data, or external integrations. The initialized project has the Manus server capability enabled and no database. The runtime server is needed to render Blade.

Public pages will be `/` for the import offer, buyer assurances, payment stages, indicative estimator and request form; `/journey/example` for a clearly labelled illustrative car journey and its milestones; and `/manus-routes.json` for the platform's route manifest. Both public pages use meaningful Blade-rendered HTML and page-specific SEO metadata. Sample order and testimonial content must be plainly marked as illustrative placeholders, not presented as real customer evidence.

The KES 300,000 bidding payment and subsequent car, shipping and Mombasa duty/clearance stages will be explained without inventing final refund terms, deadlines or additional fees. The estimator will use editable illustrative cost inputs and label its output as a planning estimate; final duty depends on the current KRA vehicle valuation and tariff treatment. The request form composes a structured WhatsApp message. A business WhatsApp number is not known, so the interface must not send customers to a made-up number. If no number is configured, provide a usable copy/share fallback and a clear setup note.
The supplied approximately KES 100,000 commission appears as an editable example service-fee line. The supplied approximately 25% comparison with car yards is presented only as an owner-stated, non-guaranteed comparison and directs buyers to compare like-for-like written quotes.

## Project structure

- `routes/web.php`: Blade-rendered home and illustrative journey routes, including meaningful 404 handling.
- `resources/views/layouts/app.blade.php`: shared responsive shell, metadata, navigation and footer.
- `resources/views/pages/home.blade.php` and `resources/views/pages/journey-example.blade.php`: public page content and Vue mount points.
- `resources/js/app.js`: Vue app bootstrap and mount registration.
- `resources/js/components/CostEstimator.vue`: reactive user-entered cost estimate and breakdown.
- `resources/js/components/JourneyTimeline.vue`: sample shipment's labelled illustrative milestones.
- `resources/js/components/VehicleRequest.vue`: validated enquiry fields and structured WhatsApp message preparation.
- `resources/css/app.css`: brand tokens, responsive layouts, accessible controls and motion preferences.
- `public/images/`: generated original website visuals.
- `public/manus-routes.json`: synchronized public page route manifest.
- `Dockerfile`: reproducible production container for Laravel + compiled assets.

## Design

Three low-probability options considered: **Japanese logistics field journal** (0.073), **Nairobi urban motorsport editorial** (0.041), and **minimal premium showroom catalogue** (0.086). Chosen: **Japanese logistics field journal**.

- **Design Movement:** Contemporary editorial design inspired by Japanese freight manifests and well-made Kenyan field guides.
- **Core Principles:** Costs are legible at a glance; progress looks trackable; proof is distinguished from demo content; every action works cleanly on a phone.
- **Color Philosophy:** Warm paper and deep ink establish calm credibility; a distinctive signal vermilion marks actions and milestones; muted green denotes verified/completed steps, never savings claims.
- **Layout Paradigm:** Asymmetric, editorial split compositions. The hero pairs a short promise and a clear estimate CTA with a large port-side vehicle photo. Milestones flow along a route rail rather than a generic centered grid. Cost rows read like a clean invoice.
- **Signature Elements:** Thin route-line motif connecting Japan to Mombasa; small manifest-style labels and timestamps; a vermilion port-stamp accent.
- **Interaction Philosophy:** Direct and low-friction. Inputs update the estimate immediately; timeline states have visible labels; the enquiry form shows what it will share before any WhatsApp handoff.
- **Animation:** Restrained route-line drawing and small fade/slide reveals; no parallax or long entrances. Respect `prefers-reduced-motion` and preserve full content without motion.
- **Typography System:** Space Grotesk for display/section headings and DM Sans for body/UI, with system sans-serif fallbacks; tabular numerals for costs. Use compact manifest labels only for metadata, never dense paragraph text.
- **Brand Essence:** A clear, accountable guide from Japanese auction to Kenyan handover; **grounded, transparent, responsive**.
- **Brand Voice:** Specific and reassuring, never grandiose. Example: “Bid only after you approve the ceiling.” “Track the car, not just the promise.”
- **Wordmark & Logo:** A temporary “MILEPOST / JAPAN → KENYA” wordmark with a simple route-line emblem connecting two stamped dots; mark the business name as replaceable until the owner supplies the real name.
- **Signature Brand Color:** Signal vermilion `#E05A3A`.

## Dependencies and serving

Use Laravel 12, PHP 8.3+ with the core extensions required by Laravel, Vue 3, Vite, and the Laravel Vite plugin. Pin Node's package manager in `package.json` and commit its lockfile. Compile frontend assets with Vite and serve the Blade app on the configured port 3000. Add a Dockerfile that installs Composer dependencies, installs/builds frontend assets, and starts Laravel's production-capable PHP server on `PORT` (default 3000); expose an unauthenticated `/up` health endpoint. Do not require environment secrets or a database. Configure the container deployment declaration but do not publish without an explicit request.
