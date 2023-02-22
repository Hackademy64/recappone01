<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <x-navbar/>
    <div class="min-vh-100">
        {{$slot}}
    </div>

    <x-footer/>
    <script src="https://kit.fontawesome.com/823b609f2e.js" crossorigin="anonymous"></script>
</body>
</html>