<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-url" content="{{ url('api') }}">
    <title>Expense Manager</title>
</head>
<body>

{{-- Mount the app --}}
<div id="app"></div>
<script src="{{asset('js/app.js')}}"></script>
</body>

