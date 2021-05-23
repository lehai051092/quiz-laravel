@extends('layouts.admin.root')
@section('title')
    <title>Login Admin</title>
@endsection
@section('content')
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Quiz Laravel Admin</h2>
            <form action="{{ route('admin.post.login') }}" method="post">
                @csrf
                <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="login">
            </form>
        </div>
    </div>
@endsection
