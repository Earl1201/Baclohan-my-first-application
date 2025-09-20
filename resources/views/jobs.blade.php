{{-- Updated jobs.blade.php - Individual Job Cards --}}
<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    {{-- Grid container for job cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
        @foreach ($jobs as $job)
            {{-- Individual job card container --}}
            <div class="bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-xl p-6 border border-slate-600/40 hover:border-emerald-400/50 transition-all duration-300 hover:shadow-2xl hover:shadow-emerald-400/20 group">
                {{-- Job title --}}
                <h3 class="text-xl font-heading font-bold text-emerald-400 mb-3 group-hover:text-emerald-300 transition-colors">
                    {{ $job['title'] }}
                </h3>

                {{-- Job salary --}}
                <p class="text-gray-300 text-lg mb-4">
                    <span class="text-amber-400 font-medium">Salary:</span> {{ $job['salary'] }} per year
                </p>

                {{-- View job button/link --}}
                <a href="/jobs/{{ $job['id'] }}"
                   class="inline-block w-full text-center bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-medium py-2 px-4 rounded-lg transition-all duration-200 hover:shadow-lg hover:shadow-emerald-500/30 transform hover:scale-105">
                    View Details
                </a>
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
