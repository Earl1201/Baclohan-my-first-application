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
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 text-gray-300 font-body">

    <nav class="bg-gray-800 bg-opacity-90 backdrop-blur-sm sticky top-0 z-50 shadow-lg">

        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-heading text-teal-400">Job Application<span class="text-gray-200">Brand</span></a>
            <div class="space-x-6">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
        </div>


    </nav>

    <main class="container mx-auto mt-16 px-4 py-24 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold font-heading text-white mb-4 leading-tight">
            {{$heading}}
        </h1>

        {{ $slot}}
    </main>

</body>
</html>
