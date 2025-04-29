<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealhtyMe</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    @vite('resources/css/app.css')
</head>

<body class="bg-[#F1F9FF] font-manrope">

    <header class="py-2">
        @include('user.layouts.navbar')
    </header>

    <main class="container mx-auto px-4 mt-8">
        @yield('content')
    </main>


</body>

</html>