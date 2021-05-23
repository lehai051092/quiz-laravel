@extends('layouts.admin.root')
@section('content')
<section id="container">
    @include('components.header')
    @include('components.sidebar')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="panel-body">
                    <div class="col-md-12 w3ls-graph">
                        @yield('section')
                    </div>
                </div>
            </div>
        </section>
        @include('components.footer')
    </section>
</section>
@endsection

