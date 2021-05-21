<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('components.links.top-theme')
    @yield('css')
</head>
<body>
<section id="container">
    @include('components.header')
    @include('components.sidebar')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="panel-body">
                    <div class="col-md-12 w3ls-graph">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        @include('components.footer')
    </section>
</section>
    @include('components.links.bottom-theme')
    @yield('js')
</body>
</html>
