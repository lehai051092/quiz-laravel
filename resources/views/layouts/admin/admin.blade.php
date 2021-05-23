@extends('layouts.admin.root')
@section('content')
<section id="container">
    @include('components.header')
    @include('components.sidebar')
    <section id="main-content">
        <section class="wrapper">
            @yield('section')
        </section>
        @include('components.footer')
    </section>
</section>
@endsection

