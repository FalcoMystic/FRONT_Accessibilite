<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }} - Top diff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="haut" class="min-h-screen bg-[var(--color-background)] text-[var(--color-text)] antialiased">
    {{ $slot }}
</body>

</html>