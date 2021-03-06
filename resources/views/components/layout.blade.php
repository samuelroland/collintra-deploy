<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Collintra</title>
    @livewireStyles
</head>
<body class="bg-bluebg p-3 text-lg overflow-hidden">
    <div x-data="{menuOpen: false}">
        @include("header")
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>
