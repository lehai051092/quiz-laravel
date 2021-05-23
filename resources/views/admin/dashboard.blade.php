@extends('layouts.admin.admin')
@section('title')
    <title>Dashboard</title>
@endsection
@section('section')
    <h1>Welcome to dashboard, {{ $user->first_name . ' ' . $user->last_name}}</h1>
@endsection
