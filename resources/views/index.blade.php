<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
{{--NOTES--}}
{{--avoid image distortion sm:object-cover--}}
{{--<body class="bg-gray-100 sm:bg-green-500 md:bg-red-200 bg:yellow-500 xl:pink-500">--}}
<body class="bg-gray-100">
<div class="px-8 py-12 max-w-md mx-auto sm-w-xl">
    <img class="h-30" src="{{asset('img/workcation.png')}}" alt="workcation">
    <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full sm:object-cover sm:object-center" src="{{asset('img/beach-work.jpg')}}" alt="">
    <h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight sm:text-4xl">You can work from anywhere.
        <span class="text-indigo-500">Take advantage of it.</span>
    </h1>
    <p class="mt-2 text-gray-600">
        Workcation helps you find work-friendly rentals in beautiful locations
        so you can enjoy some nice weather even when you're not on vacation.
    </p>
    <div class="mt-4">
        <a href="#" class="inline-block px-5 py-3 rounded-lg shadow-lg bg-indigo-500 text-sm text-white uppercase tracking-wider font-semibold">Book your escape</a>
    </div>
</div>
</body>
</html>
