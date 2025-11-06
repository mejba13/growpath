@extends('layouts.frontend')

@section('title', 'Terms of Service - Legal Agreement | GrowPath')
@section('description', 'GrowPath Terms of Service. Read our terms and conditions for using our CRM platform.')
@section('keywords', 'terms of service, terms and conditions, legal agreement, user agreement')

@section('content')
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-bold mb-6">Terms of Service</h1>
        <p class="text-xl text-blue-100">Last updated: {{ date('F d, Y') }}</p>
    </div>
</section>

<section class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <div class="bg-blue-50 border-l-4 border-primary-accent p-6 mb-8">
                <p class="text-sm font-semibold text-primary-brand mb-2">Agreement to Terms</p>
                <p class="text-sm text-neutral-700">
                    By accessing or using GrowPath, you agree to be bound by these Terms of Service. Please read them carefully.
                </p>
            </div>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">1. Acceptance of Terms</h2>
            <p class="text-neutral-700 mb-6">
                By creating an account and using GrowPath, you agree to comply with and be bound by these Terms of Service, our Privacy Policy, and all applicable laws and regulations. If you do not agree with any part of these terms, you may not use our services.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">2. Description of Service</h2>
            <p class="text-neutral-700 mb-6">
                GrowPath provides a cloud-based Customer Relationship Management (CRM) platform that enables users to manage prospects, track sales pipelines, and grow their business. We reserve the right to modify, suspend, or discontinue any aspect of the service at any time.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">3. Account Registration</h2>
            <p class="text-neutral-700 mb-4">To use GrowPath, you must:</p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>Provide accurate and complete registration information</li>
                <li>Maintain the security of your account credentials</li>
                <li>Notify us immediately of any unauthorized access</li>
                <li>Be responsible for all activities under your account</li>
                <li>Be at least 18 years of age</li>
            </ul>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">4. Subscription and Billing</h2>
            <h3 class="text-xl font-semibold text-primary-brand mb-3">4.1 Plans and Pricing</h3>
            <p class="text-neutral-700 mb-4">
                We offer multiple subscription plans with different features and pricing. Current pricing is available on our Pricing page. We reserve the right to change pricing with 30 days' notice.
            </p>

            <h3 class="text-xl font-semibold text-primary-brand mb-3">4.2 Payment Terms</h3>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>Subscriptions are billed monthly or annually in advance</li>
                <li>All fees are non-refundable except as required by law</li>
                <li>Failed payments may result in service suspension</li>
                <li>You authorize us to charge your payment method automatically</li>
            </ul>

            <h3 class="text-xl font-semibold text-primary-brand mb-3">4.3 Free Trial</h3>
            <p class="text-neutral-700 mb-6">
                We may offer a free trial period. At the end of the trial, your account will be automatically charged unless you cancel before the trial ends.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">5. Acceptable Use Policy</h2>
            <p class="text-neutral-700 mb-4">You agree not to:</p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>Use the service for any illegal purpose</li>
                <li>Transmit viruses, malware, or harmful code</li>
                <li>Attempt to gain unauthorized access to our systems</li>
                <li>Interfere with or disrupt the service</li>
                <li>Use the service to send spam or unsolicited communications</li>
                <li>Reverse engineer or copy any part of the service</li>
                <li>Resell or redistribute the service without permission</li>
            </ul>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">6. Data Ownership and Usage</h2>
            <p class="text-neutral-700 mb-6">
                You retain all rights to your customer data. We will not access, use, or disclose your data except as necessary to provide the service or as required by law. You are responsible for the accuracy and legality of the data you input into the system.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">7. Intellectual Property</h2>
            <p class="text-neutral-700 mb-6">
                All content, features, and functionality of GrowPath are owned by us and protected by copyright, trademark, and other intellectual property laws. You may not copy, modify, distribute, or create derivative works without our written permission.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">8. Service Level and Uptime</h2>
            <p class="text-neutral-700 mb-6">
                We strive to maintain 99.9% uptime but do not guarantee uninterrupted access to the service. Scheduled maintenance will be announced in advance when possible.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">9. Termination</h2>
            <p class="text-neutral-700 mb-4">
                Either party may terminate the service agreement:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>You may cancel your subscription at any time from your account settings</li>
                <li>We may terminate your account for violation of these terms</li>
                <li>Upon termination, your access will be immediately suspended</li>
                <li>We will retain your data for 30 days to allow for export or recovery</li>
            </ul>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">10. Limitation of Liability</h2>
            <p class="text-neutral-700 mb-6">
                TO THE MAXIMUM EXTENT PERMITTED BY LAW, GROWPATH SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, OR ANY LOSS OF PROFITS OR REVENUES.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">11. Warranty Disclaimer</h2>
            <p class="text-neutral-700 mb-6">
                THE SERVICE IS PROVIDED "AS IS" WITHOUT WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">12. Indemnification</h2>
            <p class="text-neutral-700 mb-6">
                You agree to indemnify and hold harmless GrowPath from any claims, damages, or expenses arising from your use of the service or violation of these terms.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">13. Governing Law</h2>
            <p class="text-neutral-700 mb-6">
                These terms are governed by the laws of the State of California, USA, without regard to conflict of law principles.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">14. Changes to Terms</h2>
            <p class="text-neutral-700 mb-6">
                We reserve the right to modify these terms at any time. We will provide notice of material changes via email or through the platform. Continued use after changes constitutes acceptance.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">15. Contact Information</h2>
            <div class="bg-neutral-50 rounded-lg p-6">
                <p class="text-neutral-700 mb-2"><strong>Email:</strong> legal@growpath.com</p>
                <p class="text-neutral-700 mb-2"><strong>Address:</strong> 123 Business Street, San Francisco, CA 94102</p>
                <p class="text-neutral-700"><strong>Support:</strong> support@growpath.com</p>
            </div>
        </div>

        <div class="bg-primary-accent text-white rounded-lg p-8 mt-12 text-center">
            <h3 class="text-2xl font-bold mb-4">Questions About These Terms?</h3>
            <p class="mb-6">Our legal team is available to clarify any questions you may have.</p>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-white text-primary-accent rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection
