<?php

$canonicalUrl = trim((string) env('APP_CANONICAL_URL', ''));
$socialImageUrl = trim((string) env('APP_SOCIAL_IMAGE_URL', ''));

return [
    'name' => env('BRAND_NAME', 'Milepost Auto'),
    'short_name' => env('BRAND_SHORT_NAME', 'Milepost'),
    'whatsapp' => preg_replace('/\D+/', '', (string) env('BUSINESS_WHATSAPP', '')),
    'canonical_url' => str_starts_with($canonicalUrl, 'https://') ? rtrim($canonicalUrl, '/') : null,
    'social_image_url' => str_starts_with($socialImageUrl, 'https://') ? $socialImageUrl : null,
];
