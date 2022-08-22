<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<header>
    <x-header/>

</header>

<body class="bg-gradient-to-br from-[#1F2425] to-[#080808] overscroll-none min-h-screen">

{{$slot}}
</body>
</html>
