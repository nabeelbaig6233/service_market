<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al Harmain Foods</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app">
    <app asset="{{ asset('') }}"></app>
</div>
@if (request()->segment(1) === 'admin')
    <script src="{{ asset('js/admin.js') }}"></script>
@else
    <script src="{{ asset('js/app.js') }}"></script>
@endif
<script src="{{asset('js/vue.js')}}"></script>
</body>
</html>
