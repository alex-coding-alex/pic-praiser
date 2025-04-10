<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head.frontpage')
</head>
<body class="min-h-screen">
<x-mary-main>
    <x-slot:content>
        {{ $slot }}
    </x-slot:content>
</x-mary-main>

<x-mary-toast/>
</body>
</html>
