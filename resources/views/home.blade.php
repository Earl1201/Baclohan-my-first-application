{{-- Interactive home.blade.php with Clickable Feature Cards --}}
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

            <button onclick="scrollToFeatures()"
               class="bg-slate-700/80 hover:bg-slate-600/80 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 hover:shadow-lg border border-slate-600/50 hover:border-slate-500/50 min-w-[200px]">
                Learn More
            </button>
        </div>
    </div>

    {{-- Interactive Features Section --}}
    <div id="features" class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        {{-- Feature 1: Quality Jobs --}}
        <div class="feature-card bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-xl p-6 border border-slate-600/40 text-center hover:border-emerald-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-400/10 cursor-pointer transform hover:scale-105 group"
             onclick="toggleFeature('quality')">

            <div class="text-emerald-400 text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">
                💼
            </div>
            <h3 class="text-xl font-heading font-bold text-white mb-3 group-hover:text-emerald-300 transition-colors">
                Quality Positions
            </h3>
            <p class="text-gray-300 leading-relaxed mb-4">
                Handpicked job opportunities from reputable employers across various industries and experience levels.
            </p>

            {{-- Expandable content --}}
            <div id="quality-details" class="hidden mt-4 p-4 bg-emerald-900/20 rounded-lg border border-emerald-600/30">
                <h4 class="text-emerald-400 font-semibold mb-2">What Makes Our Jobs Special:</h4>
                <ul class="text-sm text-gray-300 text-left space-y-1">
                    <li>• Verified employers with good reputations</li>
                    <li>• Competitive salary ranges</li>
                    <li>• Clear job descriptions and requirements</li>
                    <li>• Various experience levels welcome</li>
                </ul>
                <button onclick="window.location.href='/jobs'"
                        class="mt-3 bg-emerald-600 hover:bg-emerald-500 text-white px-4 py-2 rounded text-sm transition-colors">
                    View All Jobs →
                </button>
            </div>

            <div class="text-emerald-400 text-sm mt-2 opacity-60 group-hover:opacity-100 transition-opacity">
                Click to learn more
            </div>
        </div>

        {{-- Feature 2: Easy Application --}}
        <div class="feature-card bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-xl p-6 border border-slate-600/40 text-center hover:border-emerald-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-400/10 cursor-pointer transform hover:scale-105 group"
             onclick="toggleFeature('process')">

            <div class="text-emerald-400 text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">
                ⚡
            </div>
            <h3 class="text-xl font-heading font-bold text-white mb-3 group-hover:text-emerald-300 transition-colors">
                Simple Process
            </h3>
            <p class="text-gray-300 leading-relaxed mb-4">
                Streamlined application process designed to connect you with employers quickly and efficiently.
            </p>

            {{-- Expandable content --}}
            <div id="process-details" class="hidden mt-4 p-4 bg-emerald-900/20 rounded-lg border border-emerald-600/30">
                <h4 class="text-emerald-400 font-semibold mb-2">Our 3-Step Process:</h4>
                <div class="text-sm text-gray-300 text-left space-y-2">
                    <div class="flex items-center">
                        <span class="bg-emerald-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-2">1</span>
                        Browse and find your ideal job
                    </div>
                    <div class="flex items-center">
                        <span class="bg-emerald-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-2">2</span>
                        Submit your application with one click
                    </div>
                    <div class="flex items-center">
                        <span class="bg-emerald-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-2">3</span>
                        Get connected directly with employers
                    </div>
                </div>
                <button onclick="showApplicationDemo()"
                        class="mt-3 bg-emerald-600 hover:bg-emerald-500 text-white px-4 py-2 rounded text-sm transition-colors">
                    See Demo →
                </button>
            </div>

            <div class="text-emerald-400 text-sm mt-2 opacity-60 group-hover:opacity-100 transition-opacity">
                Click to see how it works
            </div>
        </div>

        {{-- Feature 3: Career Growth --}}
        <div class="feature-card bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-xl p-6 border border-slate-600/40 text-center hover:border-emerald-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-400/10 cursor-pointer transform hover:scale-105 group"
             onclick="toggleFeature('growth')">

            <div class="text-emerald-400 text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">
                📈
            </div>
            <h3 class="text-xl font-heading font-bold text-white mb-3 group-hover:text-emerald-300 transition-colors">
                Career Growth
            </h3>
            <p class="text-gray-300 leading-relaxed mb-4">
                Find positions that offer advancement opportunities and help you build a successful long-term career.
            </p>

            {{-- Expandable content --}}
            <div id="growth-details" class="hidden mt-4 p-4 bg-emerald-900/20 rounded-lg border border-emerald-600/30">
                <h4 class="text-emerald-400 font-semibold mb-2">Growth Opportunities:</h4>
                <ul class="text-sm text-gray-300 text-left space-y-1">
                    <li>• Leadership and management roles</li>
                    <li>• Skill development programs</li>
                    <li>• Mentorship opportunities</li>
                    <li>• Career progression pathways</li>
                    <li>• Professional certification support</li>
                </ul>
                <button onclick="showCareerPath()"
                        class="mt-3 bg-emerald-600 hover:bg-emerald-500 text-white px-4 py-2 rounded text-sm transition-colors">
                    Explore Paths →
                </button>
            </div>

            <div class="text-emerald-400 text-sm mt-2 opacity-60 group-hover:opacity-100 transition-opacity">
                Click to explore growth paths
            </div>
        </div>
    </div>

    {{-- Statistics Section --}}
    <div class="bg-gradient-to-r from-emerald-900/20 to-emerald-800/20 rounded-xl p-8 border border-emerald-600/30 mb-16">
        <h3 class="text-2xl font-heading font-bold text-center text-emerald-400 mb-8">
            Why Choose Our Platform?
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="stat-item cursor-pointer hover:scale-105 transition-transform duration-300" onclick="animateNumber(this, 500)">
                <div class="text-3xl font-bold text-emerald-400 mb-2 counter" data-target="500">0+</div>
                <div class="text-gray-300">Active Job Listings</div>
            </div>
            <div class="stat-item cursor-pointer hover:scale-105 transition-transform duration-300" onclick="animateNumber(this, 50)">
                <div class="text-3xl font-bold text-emerald-400 mb-2 counter" data-target="50">0+</div>
                <div class="text-gray-300">Partner Companies</div>
            </div>
            <div class="stat-item cursor-pointer hover:scale-105 transition-transform duration-300" onclick="animateNumber(this, 98)">
                <div class="text-3xl font-bold text-emerald-400 mb-2 counter" data-target="98">0%</div>
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

    {{-- JavaScript for Interactivity --}}
    <script>
        // Toggle feature details
        function toggleFeature(feature) {
            const detailsId = feature + '-details';
            const details = document.getElementById(detailsId);

            // Close all other details first
            ['quality-details', 'process-details', 'growth-details'].forEach(id => {
                if (id !== detailsId) {
                    document.getElementById(id).classList.add('hidden');
                }
            });

            // Toggle current details
            details.classList.toggle('hidden');

            // Add animation
            if (!details.classList.contains('hidden')) {
                details.style.animation = 'slideDown 0.3s ease-out';
            }
        }

        // Smooth scroll to features
        function scrollToFeatures() {
            document.getElementById('features').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Demo functions
        function showApplicationDemo() {
            alert('🚀 Application Demo:\n\n1. Click "View Details" on any job\n2. Review job requirements\n3. Click "Apply Now"\n4. Upload your resume\n5. Submit with one click!\n\nIt\'s that simple!');
        }

        function showCareerPath() {
            alert('📈 Career Growth Paths:\n\n• Junior → Senior → Team Lead → Manager\n• Specialist → Expert → Consultant\n• Individual Contributor → Project Manager → Director\n\nWe help you plan and achieve your career goals!');
        }

        // Animate numbers
        function animateNumber(element, target) {
            const counter = element.querySelector('.counter');
            let current = 0;
            const increment = target / 20;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }

                if (target === 98) {
                    counter.textContent = Math.floor(current) + '%';
                } else {
                    counter.textContent = Math.floor(current) + '+';
                }
            }, 50);
        }

        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .feature-card {
                transition: all 0.3s ease;
            }

            .feature-card:active {
                transform: scale(0.98);
            }
        `;
        document.head.appendChild(style);
    </script>
</x-layout>
