<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>NotifyApp</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="bg-white text-[#111418]" style="font-family: Inter, 'Noto Sans', sans-serif;">
    @include('components.menu.sidebar')
    <div class="min-h-screen main-wrap">
        <div class="pt-6 pb-24 container">
            @yield('content')
        </div>
    </div>
    <script src="https://unpkg.com/alpinejs" defer></script>
</body>

</html>