@extends('frontend.layout.app')
@section('content')

@include('frontend.templates.banner', ['page_title' => $page->page_title ?? ''])



@endsection