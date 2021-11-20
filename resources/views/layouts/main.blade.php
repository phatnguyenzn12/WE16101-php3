<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'WE16101')</title>
    <style>
        .clearfix:after{
            clear: both;
            content: "";
            display: table;
        }
        .txt-red{
            color: red;
        }
    </style>
</head>
<body>
    @include('layouts.header')
    <div class="clearfix">
        <main style="float: left; width: 70%; height: 500px;">
            @yield('content')
        </main>
        <aside style="float: right; width: 29%; background: #ccc; height: 500px;"></aside>
    </div>
    <footer style="width: 100%; height: 150px; background: grey;"></footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @yield('page-script')
</body>
</html>