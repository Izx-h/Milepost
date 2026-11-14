# Milepost Auto — Japan to Kenya importer frontend

A responsive Laravel Blade + Vue frontend demonstration for a Japan-to-Kenya vehicle sourcing service. The public experience explains the bidding and payment stages, displays an illustrative shipment timeline, estimates editable cost lines and prepares a structured vehicle request message.

## Included

- Blade-rendered home, example journey and genuine 404 pages.
- Vue components for the cost worksheet, milestone timeline and vehicle-request message.
- Responsive layouts with hero and shipment sections wired to generated artwork paths in Manus project storage.
- A multi-stage PHP 8.3 + Apache container that compiles and serves Vite assets.

This is a frontend demo. It does not process payments, save customer requests, use a database, connect to live orders or call external APIs. The sample vehicle, cost values, journey and brand name are illustrative. Replace them with verified company information before launch. No testimonials or customer proof are fabricated.

## Local setup

```sh
composer install
cp .env.example .env
php artisan key:generate
npm ci
npm run build
php artisan serve --host=0.0.0.0 --port=3000
```

## Before using it for real enquiries

Set `BRAND_NAME` to the actual business name. Set `BUSINESS_WHATSAPP` to the verified business number in international digits with no `+` or spaces (for example, `2547XXXXXXXX`). Until set, the form offers a share/copy fallback and does not direct visitors to a guessed number. Set `APP_CANONICAL_URL` to the approved public HTTPS origin and `APP_SOCIAL_IMAGE_URL` to a real absolute HTTPS preview image once available.

Replace all illustrative estimator values with confirmed ranges or a real quote workflow. Its editable service-fee line starts at approximately KES 100,000, reflecting the owner's stated per-car commission; confirm the actual fee in writing. The roughly 25% yard-price comparison is not guaranteed. Duty is an estimate only; final KRA valuation and taxes depend on vehicle details and current schedules. KES 300,000 is shown because it was supplied in the brief; application, refund and deadline terms are intentionally left to a signed bidding mandate. Replace the sample milestones with customer-specific status data only after building a backend and suitable access controls. Do not present an example milestone as a real import.
