@extends('backend.layouts.app')

<!-- @section('title', 'Home Blog Category') -->

@section('css')
{{ Html::style('Admin/css/trix.css') }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">{{ isset($blogcategory) ? 'Edit Blog Category' : 'Add Blog Category' }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.blogcategory.index') }}">Blog Category</a></li>
            <li class="breadcrumb-item active">{{ isset($blogcategory) ? 'Edit blog category' : 'Add blog category' }}</li>
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
                        <form method="POST" action="{{ isset($blogcategory) ? route('admin.blogcategory.update', $blogcategory->id) : route('admin.blogcategory.store') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if(isset($blogcategory))
                            @method('PUT')
                            @endif
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="blogcategoryTitle">Blog Category Title</label>
                                    <input type="text" name="category_title" class="form-control" id="blogcategoryTitle" aria-describedby="blogcategoryTitleHelp" placeholder="Enter Blog Category Name" value="{{ isset($blogcategory) ? $blogcategory->category_title : '' }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="blogcategoryDescription">Blog Category Description</label>
                                    <input id="description" type="hidden" name="category_description" value="{{ isset($blogcategory) ? $blogcategory->category_description : '' }}">
                                    <trix-editor input="description"></trix-editor>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="blogcategoryseocategoryTitle">Blog Category SEO Title</label>
                                    <input type="text" name="category_seo_title" class="form-control" id="blogcategoryseocategoryTitle" aria-describedby="blogcategoryseocategoryTitleHelp" placeholder="Enter Blog Category SEO Title" value="{{ isset($blogcategory) ? $blogcategory->category_seo_title : '' }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="blogcategoryseocategoryKeyword">Blog Category SEO Keyword</label>
                                    <input type="text" name="category_seo_keyword" class="form-control" id="blogcategoryseocategoryKeyword" aria-describedby="blogcategoryseocategoryKeywordHelp" placeholder="Enter Blog Category SEO Keyword" value="{{ isset($blogcategory) ? $blogcategory->category_seo_keyword : '' }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="blogcategoryseocategoryDescription">Blog Category Description</label>
                                    <input id="seo_description" type="hidden" name="category_seo_description" value="{{ isset($blogcategory) ? $blogcategory->category_seo_description : '' }}">
                                    <trix-editor input="seo_description"></trix-editor>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ isset($blogcategory) ? 'Update' : 'Save' }}</button>
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