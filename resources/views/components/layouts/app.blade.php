<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        <main class="flex justify-center items-start py-16 bg-slate-100 min-h-screen text-slate-800">
            {{ $slot }}
        </main>
    </body>
</html>
