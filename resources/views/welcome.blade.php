<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Al Harmain Foods</title>
    @if (request()->segment(1) === 'admin' && request()->segment(2) !== 'login')
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif

</head>
<body class="nav-md">
<div id="app">
    <app asset="{{ asset('') }}"></app>
</div>
@if (request()->segment(1) === 'admin' && request()->segment(2) !== 'login')
    <script src="{{ asset('js/admin.js') }}"></script>
@else
    <script src="{{ asset('js/app.js') }}"></script>
@endif
<script src="{{asset('js/vue.js')}}"></script>
</body>
</html>
