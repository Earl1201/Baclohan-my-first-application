<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-First-Application</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        heading: ['Montserrat', 'sans-serif'],
                        body: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'office-gray': '#3a4247',
                        'warm-beige': '#d4c5b0',
                        'soft-green': '#7a8471'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-slate-800 via-slate-700 to-slate-600 text-gray-100 font-body min-h-screen">

    <!-- Dimmed background image -->
    <img src="{{ asset('images/Job List Background.jpg') }}" alt="Background" class="w-full h-screen object-top opacity-40 fixed top-0 left-0 -z-10" />

    <!-- Side panels for aesthetic framing -->
    <div class="fixed left-0 top-0 w-0 h-full bg-gradient-to-b from-slate-10/90 via-slate-800/80 to-slate-90/90 backdrop-blur-sm z-10"></div>
    <div class="fixed right-0 top-0 w-0 h-full bg-gradient-to-b from-slate-10/90 via-slate-800/80 to-slate-90/90 backdrop-blur-sm z-10"></div>

    <nav class="bg-slate-900/85 backdrop-blur-md sticky top-0 z-50 shadow-2xl border-b border-slate-700/50">
        <div class="container mx-auto px-20 py-5 flex justify-between items-center">
            <a href="#" class="text-3xl font-heading text-emerald-400 hover:text-emerald-300 transition-colors">
                Job Application<span class="text-amber-100"></span>
            </a>
           <div class="hidden md:block">
    <div class="ml-10 flex items-baseline space-x-4">
        <!-- inside layout.blade.php's nav section -->
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
        <x-nav-link href="/jobs/create" :active="request()->is('jobs/create')">Create Job</x-nav-link>
        </div>
    </div>
    </nav>

    <main class="container mx-auto mt-10 px-6 md:px-20 py-16 relative z-20">
        {{-- Page heading --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-6xl font-extrabold font-heading text-white mb-6 leading-tight drop-shadow-2xl">
                {{$heading}}
            </h1>
        </div>

        {{-- Content container with better spacing for cards --}}
        <div class="backdrop-blur-sm bg-slate-900/20 rounded-2xl p-4 md:p-8 shadow-2xl border border-slate-700/30 min-h-[400px]">
            {{ $slot}}
        </div>
    </main>

</body>
</html>
