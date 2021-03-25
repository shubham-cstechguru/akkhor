@extends('frontend.layout.app')

@section('title', 'Blog')

@section('description', 'Blogs')

@section('keywords', 'Blogs')

@section('content')

@include('frontend.templates.banner', ['page_title' => 'Blogs'])

<div class="main-products main-product_pricing" style="background:#f3f3f3;padding-top:20px;">

</div>
<div class="main-products" style="background:#f3f3f3; min-height: auto;padding-bottom:40px;padding-top:0px;">
    <div class="wrapper-fix">

        <div class="main-prcing post-pricing">
            @foreach($blog as $key => $b)
            <div class="post">
                <div class="header_post">
                    <a href="{{ route('home.blog.single', $b->blog_slug ) }}">
                        <img src="{{ asset('/storage/blog/'.$b->blog_image) }}" alt="">
                    </a>
                </div>

                <div class="body_post">
                    <div class="post_content">
                        <a href="{{ route('home.blog.single', $b->blog_slug ) }}">
                            <h1>{{ $b->blog_title }}</h1>
                        </a>
                        <p>{{ $b->blog_short_description }}</p>

                        <div class="container_infos">
                            <div class="container_tags">
                                <span>Social Share</span>
                                <div class="tags">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('home.blog.single', $b->blog_slug ) }}" target="_blank"><img src="{{asset('/images/fb.png')}}"></a></li>
                                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('home.blog.single', $b->blog_slug ) }}" target="_blank"><img src="{{asset('/images/link.png')}}"></a></li>
                                        <li><a href="https://twitter.com/intent/tweet?url={{ route('home.blog.single', $b->blog_slug ) }}&text=" target="_blank"><img src="{{asset('/images/twt.png')}}"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $blog->links('frontend.templates.pagination') }}
    </div>
</div>

@endsection