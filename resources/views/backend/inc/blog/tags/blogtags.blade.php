@extends('backend.layouts.app')

@section('title', isset($blogtag) ? 'Edit Blog Tag' : 'Add Blog Tag')


@section('content')

<h1 class="mt-4">{{ isset($blogtag) ? 'Edit Blog Tag' : 'Add Blog Tag' }}</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('admin.blogtags.index') }}">Blog Tag</a></li>
    <li class="breadcrumb-item active">{{ isset($blogtag) ? 'Edit blog tags' : 'Add blog tags' }}</li>
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
                <form method="POST" action="{{ isset($blogtag) ? route('admin.blogtags.update', $blogtag->id) : route('admin.blogtags.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @if(isset($blogtag))
                    @method('PUT')
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="blogtagsTitle">Blog Tag Title</label>
                            <input required type="text" name="tags_title" class="form-control name" id="blogtagsTitle" aria-describedby="blogcategoryTitleHelp" placeholder="Enter Blog Tag" value="{{ isset($blogtag) ? $blogtag->tags_title : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="blogtagsseocategoryTitle">Blog Tag SEO Title</label>
                            <input type="text" name="tags_seo_title" class="form-control" id="blogtagsseocategoryTitle" aria-describedby="blogtagsseocategoryTitleHelp" placeholder="Enter Blog Tag SEO Title" value="{{ isset($blogtag) ? $blogtag->tags_seo_title : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="blogtagsseocategoryKeyword">Blog Tag SEO Keyword</label>
                            <input type="text" name="tags_seo_keyword" class="form-control" id="blogtagsseocategoryKeyword" aria-describedby="blogtagsseocategoryKeywordHelp" placeholder="Enter Blog Tag SEO Keyword" value="{{ isset($blogtag) ? $blogtag->tags_seo_keyword : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="blogtagsseocategoryDescription">Blog Tag SEO Description</label>
                            <textarea name="tags_seo_description" class="form-control" id="blogtagsseocategoryDescription" rows="1">{{ isset($blogtag) ? $blogtag->tags_seo_description : '' }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">{{ isset($blogtag) ? 'Update' : 'Save' }}</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection('content')