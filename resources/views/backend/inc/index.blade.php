@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')

Welcome, {{ auth()->guard('admin')->user()->name }}

@endsection('content')
