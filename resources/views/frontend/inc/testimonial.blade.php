@extends('frontend.layout.app')

@section('title', 'Testimonials')

@section('description', 'Testimonials Page')

@section('keywords', 'Testimonials Page')

@section('content')

@include('frontend.templates.banner', ['page_title' => 'Testimonial'])

<div class="main-products main-product_pricing" style="background:#f3f3f3;padding-top:20px;">

</div>
<div class="main-products" style="background:#f3f3f3; min-height: auto;padding-bottom:40px;padding-top:0px;">
    <div class="wrapper-fix">
        <div class="main-prcing post-pricing">
            @foreach($testimonial as $key => $t)
            <figure class="snip1192">
                <blockquote>{{ $t->t_testimonial }}</blockquote>
                <div class="author">
                    <img src="{{ asset('/storage/testimonial/'.$t->t_image) }}" alt="sq-sample1" />
                    <h5>{{ $t->t_name }}</h5>
                </div>
            </figure>
            @endforeach
        </div>
    </div>
</div>
@endsection