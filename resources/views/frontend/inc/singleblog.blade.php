@extends('frontend.layout.app')
@section('content')

@include('frontend.templates.banner', ['page_title' => $blog->blog_title ?? '404 Not Found'])

<div class="wrapper-fix">
    @if($blog->blog_image ?? '' !='')
    <img src="{{ asset("/storage/pages/".$blog->blog_image) }}" alt="{{$blog->blog_image}}" style="width: 100%; margin-top: 20px;">
    @else
    @endif
    @if($blog->blog_description ?? '' !='')
    <div class="plan-tag" style="margin: 25px 0;">
        {!! $blog->blog_description !!}
    </div>
    @else
    <div class="box-main-heading" style="margin: 25px 0;">
        <h2 class="light_font wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;">
            <span>
                404 Not Found
            </span>
        </h2>
    </div>
    @endif
</div>

@endsection