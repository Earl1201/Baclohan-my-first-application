{{-- Updated job.blade.php - Enhanced Single Job View with Employer --}}
<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    {{-- Single job details card --}}
    <div class="max-w-2xl mx-auto">
        <div class="bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-xl p-8 border border-slate-600/40 shadow-2xl">

            {{-- ADDED: Employer Name --}}
            <p class="text-sm text-emerald-300 font-medium mb-4 text-center uppercase tracking-wide">
                {{ $job->employer->name }}
            </p>

            {{-- Job title --}}
            <h2 class="text-3xl font-heading font-bold text-emerald-400 mb-6 text-center">
                {{ $job['title'] }}
            </h2>

            {{-- ADDED: Job Description --}}
            <p class="text-gray-300 text-center mb-8 text-lg">
                This job pays {{ $job['salary'] }} per year.
            </p>

            {{-- Job details --}}
            <div class="space-y-4">
                {{-- ADDED: Employer Details Row --}}
                <div class="flex justify-between items-center py-3 px-4 bg-slate-700/50 rounded-lg">
                    <span class="text-gray-300 font-medium">Employer:</span>
                    <span class="text-emerald-400 font-semibold">{{ $job->employer->name }}</span>
                </div>

                <div class="flex justify-between items-center py-3 px-4 bg-slate-700/50 rounded-lg">
                    <span class="text-gray-300 font-medium">Position:</span>
                    <span class="text-white font-semibold">{{ $job['title'] }}</span>
                </div>

                <div class="flex justify-between items-center py-3 px-4 bg-slate-700/50 rounded-lg">
                    <span class="text-gray-300 font-medium">Annual Salary:</span>
                    <span class="text-emerald-400 font-bold text-xl">{{ $job['salary'] }}</span>
                </div>

                <div class="flex justify-between items-center py-3 px-4 bg-slate-700/50 rounded-lg">
                    <span class="text-gray-300 font-medium">Job ID:</span>
                    <span class="text-amber-400 font-semibold">#{{ $job['id'] }}</span>
                </div>
            </div>

            {{-- Action buttons --}}
            <div class="flex gap-4 mt-8">
                <a href="/jobs"
                   class="flex-1 text-center bg-slate-600 hover:bg-slate-500 text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 hover:shadow-lg">
                    ← Back to Jobs
                </a>

                <a href="/jobs/{{ $job->id }}/edit"
                   class="flex-1 text-center bg-blue-600 hover:bg-blue-500 text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 hover:shadow-lg">
                    Edit Job
                </a>

                <button class="flex-1 bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 hover:shadow-lg hover:shadow-emerald-500/30 transform hover:scale-105">
                    Apply Now
                </button>
            </div>
        </div>
    </div>
</x-layout>
