<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    {{-- Grid container for job cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
        @foreach ($jobs as $job)
            {{-- Individual job card container with flexbox for uniform height --}}
            <div class="bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-xl border border-slate-600/40 hover:border-emerald-400/50 transition-all duration-300 hover:shadow-2xl hover:shadow-emerald-400/20 group overflow-hidden flex flex-col h-full">

                {{-- Clickable job link area - flex-grow to push button down --}}
                <a href="/jobs/{{ $job['id'] }}" class="block p-6 pb-4 flex-grow flex flex-col">
                    {{-- Display Employer Name --}}
                    <div class="text-sm text-emerald-300 font-medium mb-2 uppercase tracking-wide">
                        {{ $job->employer->name }}
                    </div>

                    {{-- Job title with consistent height --}}
                    <h3 class="text-xl font-heading font-bold text-emerald-400 mb-3 group-hover:text-emerald-300 transition-colors min-h-[3.5rem] flex items-start">
                        {{ $job['title'] }}
                    </h3>

                    {{-- Job salary --}}
                    <p class="text-gray-300 text-lg mb-4">
                        <span class="text-amber-400 font-medium">Salary:</span> {{ $job['salary'] }} per year
                    </p>
                </a>

                {{-- Tags section with consistent height --}}
                <div class="px-6 pb-4 mb-4 min-h-[2.5rem] flex flex-wrap items-start">
                    @foreach($job->tags as $tag)
                        <span class="inline-block bg-emerald-800/40 text-emerald-300 text-xs font-semibold mr-2 mb-2 px-2.5 py-1 rounded-full border border-emerald-600/30 hover:bg-emerald-700/40 transition-colors">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>

                {{-- View job button - always at bottom --}}
                <div class="px-6 pb-6 mt-auto">
                    <a href="/jobs/{{ $job['id'] }}"
                       class="inline-block w-full text-center bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-medium py-2 px-4 rounded-lg transition-all duration-200 hover:shadow-lg hover:shadow-emerald-500/30 transform hover:scale-105">
                        View Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- If no jobs available --}}
    @if(empty($jobs))
        <div class="text-center py-12">
            <p class="text-gray-400 text-lg">No jobs available at the moment.</p>
        </div>
    @endif
</x-layout>
