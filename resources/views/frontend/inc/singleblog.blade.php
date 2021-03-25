@extends('frontend.layout.app')

@section('title', $blog->blog_seo_title ?? $blog->blog_title)

@section('description', $blog->blog_seo_description ?? $blog->blog_title)

@section('keywords', $blog->blog_seo_keyword ?? $blog->blog_title)

@section('content')

@include('frontend.templates.banner', ['page_title' => $blog->blog_title ?? '404 Not Found'])

<div class="main-products main-product_pricing" style="background:#f3f3f3;padding-top:20px;">

</div>
<div class="main-products" style="background:#f3f3f3; min-height: auto;padding-bottom:40px;padding-top:0px;">
    <div class="wrapper-fix">
        @if($blog->blog_image ?? '' !='')
        <img src="{{ asset('/storage/blog/'.$blog->blog_image) }}" alt="{{$blog->blog_image}}" style="width: 100%; margin-top: 20px;">
        @else
        @endif

        <div class="blog_data">
            <div class="container_data">
                <div class="postedBy">
                    <span>Category: </span>
                    @php 
                    $cat = $blog->blog_category->category_title;
                    @endphp
                    {{ $cat }}
                </div>
                <div class="postedBy">
                    <span>Tags: </span>
                </div>
            </div>
            <div class="blog_social">
                <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('home.blog.single', $blog->blog_slug ) }}" target="_blank"><img src="{{asset('/images/fb.png')}}"></a></li>
                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('home.blog.single', $blog->blog_slug ) }}" target="_blank"><img src="{{asset('/images/link.png')}}"></a></li>
                    <li><a href="https://twitter.com/intent/tweet?url={{ route('home.blog.single', $blog->blog_slug ) }}&text=" target="_blank"><img src="{{asset('/images/twt.png')}}"></a></li>
                </ul>
            </div>
        </div>
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
</div>
@endsection