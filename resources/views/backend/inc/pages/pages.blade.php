@extends('backend.layouts.app')

<!-- @section('title', 'Home Page') -->

@section('css')
{{ Html::style('Admin/css/trix.css') }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">{{ isset($page) ? 'Edit Page' : 'Add Page' }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.pages.index') }}">Pages</a></li>
            <li class="breadcrumb-item active">{{ isset($page) ? 'Edit page' : 'Add page' }}</li>
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
                        <form method="POST" action="{{ isset($page) ? route('admin.pages.update', $page->id) : route('admin.pages.store') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if(isset($page))
                            @method('PUT')
                            @endif
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pagesTitle">Page Title</label>
                                    <input type="text" name="page_title" class="form-control" id="pagesTitle" aria-describedby="pagesTitleHelp" placeholder="Enter Page Name" value="{{ isset($page) ? $page->page_title : '' }}">
                                </div>

                                @if(isset($page))
                                <div class="form-group col-md-3">
                                    <label for="pagesImage">Page Image</label>
                                    <input type="file" name="page_image" class="form-control-file" id="pagesImage" value="{{ isset($page) ? $page->page_image : '' }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <img src="{{ asset("/storage/pages/".$page->page_image) }}" alt="" width="100">
                                </div>
                                @else
                                <div class="form-group col-md-6">
                                    <label for="pagesImage">Page Image</label>
                                    <input type="file" name="page_image" class="form-control-file" id="pagesImage" value="{{ isset($page) ? $page->image : '' }}">
                                </div>
                                @endif

                                <div class="form-group col-md-12">
                                    <label for="categoryDescription">Page Description</label>
                                    <input id="description" type="hidden" name="page_description" value="{{ isset($page) ? $page->page_description : '' }}">
                                    <trix-editor input="description"></trix-editor>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pagesseocategoryTitle">Page SEO Title</label>
                                    <input type="text" name="page_seo_title" class="form-control" id="pagesseocategoryTitle" aria-describedby="pagesseocategoryTitleHelp" placeholder="Enter Page SEO Title" value="{{ isset($page) ? $page->page_seo_title : '' }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pagesseocategoryKeyword">Page SEO Keyword</label>
                                    <input type="text" name="page_seo_keyword" class="form-control" id="pagesseocategoryKeyword" aria-describedby="pagesseocategoryKeywordHelp" placeholder="Enter Page SEO Keyword" value="{{ isset($page) ? $page->page_seo_keyword : '' }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pagesseocategoryDescription">Page Description</label>
                                    <input id="seo_description" type="hidden" name="page_seo_description" value="{{ isset($page) ? $page->page_seo_description : '' }}">
                                    <trix-editor input="seo_description"></trix-editor>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ isset($page) ? 'Update' : 'Save' }}</button>
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