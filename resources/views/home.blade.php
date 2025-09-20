{{-- Enhanced home.blade.php - Professional Homepage --}}
<x-layout>
    <x-slot:heading>
        Welcome to Your Career Journey
    </x-slot:heading>

    {{-- Hero Section --}}
    <div class="text-center mb-16">
        <p class="text-xl md:text-2xl text-gray-300 mb-8 leading-relaxed max-w-4xl mx-auto">
            Discover exceptional career opportunities with leading employers.
            Your next professional adventure starts here.
        </p>

        {{-- Call-to-action buttons --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
            <a href="/jobs"
               class="bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 hover:shadow-2xl hover:shadow-emerald-500/30 transform hover:scale-105 min-w-[200px]">
                Browse All Jobs
            </a>

            <a href="#features"
               class="bg-slate-700/80 hover:bg-slate-600/80 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 hover:shadow-lg border border-slate-600/50 hover:border-slate-500/50 min-w-[200px]">
                Learn More
            </a>
        </div>
    </div>

    {{-- Features Section --}}
    <div id="features" class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        {{-- Feature 1: Quality Jobs --}}
        <div class="bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-xl p-6 border border-slate-600/40 text-center hover:border-emerald-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-400/10">
            <div class="text-emerald-400 text-4xl mb-4">
                💼
            </div>
            <h3 class="text-xl font-heading font-bold text-white mb-3">
                Quality Positions
            </h3>
            <p class="text-gray-300 leading-relaxed">
                Handpicked job opportunities from reputable employers across various industries and experience levels.
            </p>
        </div>

        {{-- Feature 2: Easy Application --}}
        <div class="bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-xl p-6 border border-slate-600/40 text-center hover:border-emerald-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-400/10">
            <div class="text-emerald-400 text-4xl mb-4">
                ⚡
            </div>
            <h3 class="text-xl font-heading font-bold text-white mb-3">
                Simple Process
            </h3>
            <p class="text-gray-300 leading-relaxed">
                Streamlined application process designed to connect you with employers quickly and efficiently.
            </p>
        </div>

        {{-- Feature 3: Career Growth --}}
        <div class="bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-xl p-6 border border-slate-600/40 text-center hover:border-emerald-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-400/10">
            <div class="text-emerald-400 text-4xl mb-4">
                📈
            </div>
            <h3 class="text-xl font-heading font-bold text-white mb-3">
                Career Growth
            </h3>
            <p class="text-gray-300 leading-relaxed">
                Find positions that offer advancement opportunities and help you build a successful long-term career.
            </p>
        </div>
    </div>

    {{-- Statistics Section --}}
    <div class="bg-gradient-to-r from-emerald-900/20 to-emerald-800/20 rounded-xl p-8 border border-emerald-600/30 mb-16">
        <h3 class="text-2xl font-heading font-bold text-center text-emerald-400 mb-8">
            Why Choose Our Platform?
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <div class="text-3xl font-bold text-emerald-400 mb-2">500+</div>
                <div class="text-gray-300">Active Job Listings</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-emerald-400 mb-2">50+</div>
                <div class="text-gray-300">Partner Companies</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-emerald-400 mb-2">98%</div>
                <div class="text-gray-300">Success Rate</div>
            </div>
        </div>
    </div>

    {{-- Final CTA Section --}}
    <div class="text-center bg-gradient-to-br from-slate-800/40 to-slate-900/40 rounded-xl p-8 border border-slate-600/40">
        <h3 class="text-2xl font-heading font-bold text-white mb-4">
            Ready to Start Your Journey?
        </h3>
        <p class="text-gray-300 mb-6 max-w-2xl mx-auto">
            Join thousands of professionals who have found their dream careers through our platform.
            Your perfect job is waiting for you.
        </p>

        <a href="/jobs"
           class="inline-block bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 hover:shadow-2xl hover:shadow-emerald-500/30 transform hover:scale-105">
            Explore Opportunities →
        </a>
    </div>
</x-layout>
