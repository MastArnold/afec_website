<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <main class="w-full h-screen max-h-screen bg-stone-50 flex">
        @include("components.admin-sidebar")
        <!-- Right side -->
        <div class="w-5/6 py-2 px-4">
            @include("components.admin-topbar")

            <!-- content bar -->
            <div class="w-full h-[89vh] bg-transparent flex flex-col overflow-y-auto mt-4">
                <div class="space-y-1">
                    <h1 class="text-xl text-gray-900 font-bold">{{ $title }}</h1>
                    <p class="text-sm text-gray-600">{{ $subtitle }}</p>
                </div>
                <div class="bg-white px-4 py-2 mt-2">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>

</body>
</html>