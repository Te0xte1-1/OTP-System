<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Default App Title')</title>
    @vite('resources/css/app.css')

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>
<style>
    main {
        margin-left: 250px !important;
        border: 1px solid !important;
        width: 1257px !important;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    {{-- start wrapper tag --}}
    <div class="wrapper">
