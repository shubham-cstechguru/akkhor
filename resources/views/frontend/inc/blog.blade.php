@extends('frontend.layout.app')
@section('content')

@include('frontend.templates.banner', ['page_title' => 'Blogs'])

<div class="wrapper-fix">

    <div class="main-prcing post-pricing">
        @foreach($blog as $key => $b)
        <div class="post">
            <div class="header_post">
                <img src="{{ asset("/storage/blog/".$b->blog_image) }}" alt="">
            </div>

            <div class="body_post">
                <div class="post_content">
                    <a href="{{ route('home.blog.single', $b->blog_slug ) }}">
                        <h1>{{ $b->blog_title }}</h1>
                    </a>
                    <p>{{ $b->blog_short_description }}</p>

                    <div class="container_infos">
                        <div class="postedBy">
                            <span>Category</span>
                            @foreach($b->blog_category as $bc)
                            {{ $bc->category_title }},
                            @endforeach
                        </div>

                        <div class="container_tags">
                            <span>Tags</span>
                            <div class="tags">
                                <ul>
                                    @foreach($b->blog_tags as $bt)
                                    <li>{{ $bt->tags_title }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection