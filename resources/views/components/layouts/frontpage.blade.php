<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head.frontpage')
</head>
<body class="min-h-screen prose max-w-none">
{{-- The navbar with `sticky` and `full-width` --}}
<x-mary-nav full-width>

    <x-slot:brand>
        {{-- Drawer toggle for "main-drawer" --}}
        <label for="main-drawer" class="lg:hidden mr-3">
            <x-icon name="heroicon-o-arrow-left" class="cursor-pointer"/>
        </label>

        {{-- Brand --}}
        <div>{{ $title ?? 'Pic Praiser' }}</div>
    </x-slot:brand>

    {{-- Right side actions --}}
    <x-slot:actions>
        <x-mary-button label="Login" link="{{ route('login') }}" class="btn-ghost btn-sm" responsive/>
    </x-slot:actions>
</x-mary-nav>

<x-mary-main with-nav full-width>
    <x-slot:content>
        {{ $slot }}
    </x-slot:content>
</x-mary-main>

<x-mary-toast/>
</body>
</html>
