@extends('layouts.frontend')

@section('title', 'Privacy Policy - How We Protect Your Data | GrowPath AI')
@section('description', 'GrowPath AI privacy policy. Learn how we collect, use, and protect your personal information and data.')
@section('keywords', 'privacy policy, data protection, GDPR, data security, privacy')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-900 via-neutral-800 to-neutral-900 py-20 lg:py-28">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 right-0 w-96 h-96 bg-success rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-primary-accent rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
        </div>
        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-white mb-4 leading-tight">Privacy Policy</h1>
        <p class="text-lg text-blue-100">Last updated: {{ date('F d, Y') }}</p>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <div class="bg-blue-50 border-l-4 border-primary-accent p-6 mb-8">
                <p class="text-sm font-semibold text-primary-brand mb-2">Our Commitment to Privacy</p>
                <p class="text-sm text-neutral-700">
                    At GrowPath AI, we take your privacy seriously. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our CRM platform.
                </p>
            </div>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">1. Information We Collect</h2>

            <h3 class="text-xl font-semibold text-primary-brand mb-3">1.1 Information You Provide</h3>
            <p class="text-neutral-700 mb-4">
                We collect information that you voluntarily provide to us when you:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>Register for an account</li>
                <li>Use our CRM services</li>
                <li>Contact our support team</li>
                <li>Subscribe to our newsletter</li>
                <li>Fill out forms on our website</li>
            </ul>

            <p class="text-neutral-700 mb-4">
                This information may include:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>Name, email address, and contact information</li>
                <li>Company name and business information</li>
                <li>Payment and billing information</li>
                <li>Customer data you input into the CRM</li>
                <li>Communications with our support team</li>
            </ul>

            <h3 class="text-xl font-semibold text-primary-brand mb-3">1.2 Automatically Collected Information</h3>
            <p class="text-neutral-700 mb-4">
                When you access our platform, we automatically collect certain information:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>IP address and browser type</li>
                <li>Device information and operating system</li>
                <li>Pages visited and time spent on pages</li>
                <li>Referring website addresses</li>
                <li>Usage patterns and preferences</li>
            </ul>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">2. How We Use Your Information</h2>
            <p class="text-neutral-700 mb-4">
                We use the collected information for the following purposes:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>To provide and maintain our CRM services</li>
                <li>To process your transactions and manage billing</li>
                <li>To send administrative information and updates</li>
                <li>To respond to your inquiries and provide support</li>
                <li>To improve our platform and develop new features</li>
                <li>To monitor usage and detect technical issues</li>
                <li>To send marketing communications (with your consent)</li>
                <li>To comply with legal obligations</li>
            </ul>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">3. Data Sharing and Disclosure</h2>

            <h3 class="text-xl font-semibold text-primary-brand mb-3">3.1 We Do Not Sell Your Data</h3>
            <p class="text-neutral-700 mb-6">
                We do not sell, trade, or rent your personal information to third parties.
            </p>

            <h3 class="text-xl font-semibold text-primary-brand mb-3">3.2 Service Providers</h3>
            <p class="text-neutral-700 mb-4">
                We may share your information with trusted third-party service providers who assist us in:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>Payment processing</li>
                <li>Cloud hosting services</li>
                <li>Email delivery services</li>
                <li>Analytics and performance monitoring</li>
                <li>Customer support tools</li>
            </ul>
            <p class="text-neutral-700 mb-6">
                These service providers are contractually obligated to protect your information and use it only for the purposes we specify.
            </p>

            <h3 class="text-xl font-semibold text-primary-brand mb-3">3.3 Legal Requirements</h3>
            <p class="text-neutral-700 mb-6">
                We may disclose your information if required by law, court order, or governmental request, or to protect our rights, property, or safety.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">4. Data Security</h2>
            <p class="text-neutral-700 mb-4">
                We implement industry-standard security measures to protect your information:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>SSL/TLS encryption for data in transit</li>
                <li>Encryption for sensitive data at rest</li>
                <li>Regular security audits and penetration testing</li>
                <li>Access controls and authentication measures</li>
                <li>Regular backups and disaster recovery procedures</li>
                <li>Employee training on data protection</li>
            </ul>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">5. Data Retention</h2>
            <p class="text-neutral-700 mb-6">
                We retain your information for as long as your account is active or as needed to provide services. After account termination, we retain data for a reasonable period to comply with legal obligations, resolve disputes, and enforce agreements. You may request deletion of your data at any time.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">6. Your Rights</h2>
            <p class="text-neutral-700 mb-4">
                Depending on your location, you may have the following rights:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li><strong>Access:</strong> Request copies of your personal data</li>
                <li><strong>Correction:</strong> Request correction of inaccurate data</li>
                <li><strong>Deletion:</strong> Request deletion of your personal data</li>
                <li><strong>Portability:</strong> Request transfer of your data</li>
                <li><strong>Object:</strong> Object to processing of your data</li>
                <li><strong>Withdraw Consent:</strong> Withdraw consent at any time</li>
            </ul>
            <p class="text-neutral-700 mb-6">
                To exercise these rights, please contact us at privacy@growpath.com.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">7. Cookies and Tracking</h2>
            <p class="text-neutral-700 mb-4">
                We use cookies and similar tracking technologies to:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>Maintain your session and preferences</li>
                <li>Analyze platform usage and performance</li>
                <li>Provide personalized features</li>
                <li>Deliver targeted advertising (with consent)</li>
            </ul>
            <p class="text-neutral-700 mb-6">
                You can control cookie settings through your browser preferences.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">8. International Data Transfers</h2>
            <p class="text-neutral-700 mb-6">
                Your information may be transferred to and processed in countries other than your own. We ensure appropriate safeguards are in place, including standard contractual clauses and data processing agreements.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">9. Children's Privacy</h2>
            <p class="text-neutral-700 mb-6">
                Our services are not intended for individuals under 18 years of age. We do not knowingly collect personal information from children. If you believe we have collected information from a child, please contact us immediately.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">10. Third-Party Links</h2>
            <p class="text-neutral-700 mb-6">
                Our platform may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">11. Changes to Privacy Policy</h2>
            <p class="text-neutral-700 mb-6">
                We may update this Privacy Policy periodically. We will notify you of significant changes via email or through our platform. Your continued use of our services after changes constitutes acceptance of the updated policy.
            </p>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">12. GDPR Compliance</h2>
            <p class="text-neutral-700 mb-4">
                For users in the European Economic Area (EEA):
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>We process data based on consent, contract, or legitimate interest</li>
                <li>You have the right to lodge a complaint with a supervisory authority</li>
                <li>We have appointed a Data Protection Officer (DPO)</li>
                <li>We conduct Data Protection Impact Assessments (DPIAs)</li>
            </ul>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">13. California Privacy Rights</h2>
            <p class="text-neutral-700 mb-4">
                California residents have additional rights under CCPA:
            </p>
            <ul class="list-disc list-inside text-neutral-700 mb-6">
                <li>Know what personal information is collected</li>
                <li>Know if personal information is sold or disclosed</li>
                <li>Opt-out of the sale of personal information</li>
                <li>Access and delete personal information</li>
                <li>Non-discrimination for exercising privacy rights</li>
            </ul>

            <h2 class="text-3xl font-bold text-primary-brand mt-8 mb-4">14. Contact Us</h2>
            <p class="text-neutral-700 mb-4">
                If you have questions about this Privacy Policy or our privacy practices:
            </p>
            <div class="bg-neutral-50 rounded-lg p-6">
                <p class="text-neutral-700 mb-2"><strong>Email:</strong> privacy@growpath.com</p>
                <p class="text-neutral-700 mb-2"><strong>Address:</strong> 123 Business Street, San Francisco, CA 94102</p>
                <p class="text-neutral-700"><strong>Data Protection Officer:</strong> dpo@growpath.com</p>
            </div>
        </div>

        <!-- CTA -->
        <div class="bg-primary-accent text-white rounded-lg p-8 mt-12 text-center">
            <h3 class="text-2xl font-bold mb-4">Questions About Privacy?</h3>
            <p class="mb-6">Our team is here to help you understand how we protect your data.</p>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-white text-primary-accent rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection
