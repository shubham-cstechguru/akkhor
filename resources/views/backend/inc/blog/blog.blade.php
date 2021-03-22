@extends('backend.layouts.app')

<!-- @section('title', 'Home Page') -->

@section('css')
{{ Html::style('Admin/css/trix.css') }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">{{ isset($blog) ? 'Edit Blog' : 'Add Blog' }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.blog.index') }}">Blog</a></li>
            <li class="breadcrumb-item active">{{ isset($blog) ? 'Edit Blog' : 'Add Blog' }}</li>
        </ol>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="card mb-4">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item text-danger">
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ isset($blog) ? route('admin.blog.update', $blog->id) : route('admin.blog.store') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if(isset($blog))
                            @method('PUT')
                            @endif
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="blogTitle">Blog Title</label>
                                    <input type="text" name="blog_title" class="form-control" id="blogTitle" aria-describedby="blogTitleHelp" placeholder="Enter Blog Name" value="{{ isset($blog) ? $blog->blog_title : '' }}">
                                </div>
                                @if(isset($blog))
                                <div class="form-group col-md-3">
                                    <label for="blogImage">Blog Image</label>
                                    <input type="file" name="blog_image" class="form-control-file" id="blogImage" value="{{ isset($blog) ? $blog->blog_image : '' }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <img src="{{ asset("/storage/blog/".$blog->blog_image) }}" alt="" width="100">
                                </div>
                                @else
                                <div class="form-group col-md-6">
                                    <label for="blogImage">Blog Image</label>
                                    <input type="file" name="blog_image" class="form-control-file" id="blogImage" value="{{ isset($blog) ? $blog->blog_image : '' }}">
                                </div>
                                @endif
                                <div class="form-group col-md-6">
                                    <label for="blogCategory">Blog Category</label>
                                    <select class="form-control" name="category_id" id="blogCategory">
                                        @foreach($blogcategories as $category)
                                        <option value="{{ $category->id }}" @if(isset($blog)) @if($category->id == $blog->category_id)
                                            selected
                                            @endif
                                            @endif
                                            >{{ $category->category_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="blogCategory">Blog Tags</label>
                                    <select class="form-control" name="tags_id" id="blogTags">
                                        @foreach($blogtags as $tag)
                                        <option value="{{ $tag->id }}" @if(isset($blog)) @if($tag->id == $blog->tags_id)
                                            selected
                                            @endif
                                            @endif
                                            >{{ $tag->tags_title }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="blogDescription">Blog Description</label>
                                    <input id="description" type="hidden" name="blog_description" value="{{ isset($blog) ? $blog->blog_description : '' }}">
                                    <trix-editor input="description"></trix-editor>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="seoblogTitle">Blog SEO Title</label>
                                    <input type="text" name="blog_seo_title" class="form-control" id="seoblogTitle" aria-describedby="seoblogTitleHelp" placeholder="Enter Blog SEO Title" value="{{ isset($blog) ? $blog->blog_seo_title : '' }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="seoblogKeyword">Blog SEO Keyword</label>
                                    <input type="text" name="blog_seo_keyword" class="form-control" id="seoblogKeyword" aria-describedby="seoblogKeywordHelp" placeholder="Enter Blog SEO Keyword" value="{{ isset($blog) ? $blog->blog_seo_keyword : '' }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="seoblogDescription">Blog Description</label>
                                    <input id="description" type="hidden" name="blog_seo_description" value="{{ isset($blog) ? $blog->blog_seo_description : '' }}">
                                    <trix-editor input="blog_seo_description"></trix-editor>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ isset($blog) ? 'Update' : 'Save' }}</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection('content')

@section('scripts')
{{ Html::script('Admin/js/trix.js') }}
@endsection