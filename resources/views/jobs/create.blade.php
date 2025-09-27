<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-white/20 pb-12">
                <h2 class="text-2xl font-heading font-semibold leading-7 text-white mb-3">Create a New Job</h2>
                <p class="mt-1 text-lg leading-6 text-slate-300">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-white mb-3 uppercase tracking-wide">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-xl shadow-sm ring-1 ring-inset ring-white/20 focus-within:ring-2 focus-within:ring-inset focus-within:ring-emerald-400 sm:max-w-md bg-white/10 backdrop-blur-sm">
                                <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-4 px-4 text-white placeholder:text-slate-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Shift Leader" required>
                            </div>
                        </div>
                        @error('title')
                            <div class="flex items-center space-x-2 text-red-400 text-sm mt-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-semibold">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-white mb-3 uppercase tracking-wide">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-xl shadow-sm ring-1 ring-inset ring-white/20 focus-within:ring-2 focus-within:ring-inset focus-within:ring-emerald-400 sm:max-w-md bg-white/10 backdrop-blur-sm">
                                <input type="text" name="salary" id="salary" class="block flex-1 border-0 bg-transparent py-4 px-4 text-white placeholder:text-slate-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50,000 Per Year" required>
                            </div>
                        </div>
                        @error('salary')
                            <div class="flex items-center space-x-2 text-red-400 text-sm mt-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-semibold">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-slate-300 hover:text-white transition-colors duration-200 px-6 py-3">Cancel</button>
            <button type="submit" class="rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-600 hover:to-emerald-700 px-8 py-3 text-sm font-semibold text-white shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Save</button>
        </div>
    </form>
</x-layout>
