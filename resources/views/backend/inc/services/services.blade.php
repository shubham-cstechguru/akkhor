@extends('backend.layouts.app')

@section('title', isset($service) ? 'Edit Service' : 'Add Service')

@section('content')

<h1 class="mt-4">{{ isset($service) ? 'Edit Service' : 'Add Service' }}</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('admin.services.index') }}">Services</a></li>
    <li class="breadcrumb-item active">{{ isset($service) ? 'Edit service' : 'Add service' }}</li>
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
                <form method="POST" action="{{ isset($service) ? route('admin.services.update', $service->id) : route('admin.services.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @if(isset($service))
                    @method('PUT')
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="servicesTitle">Service Title</label>
                            <input required type="text" name="service_title" class="form-control name" id="servicesTitle" aria-describedby="servicesTitleHelp" placeholder="Enter Service Name" value="{{ isset($service) ? $service->service_title : '' }}">
                        </div>

                        @if(isset($service))
                        <div class="form-group col-md-3">
                            <label for="servicesImage">Service Image</label>
                            <input type="file" name="service_image" class="form-control-file" id="servicesImage" value="{{ isset($service) ? $service->service_image : '' }}" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                        </div>
                        <div class="form-group col-md-3">
                            @if($service->service_image != '')
                            <img id="blah" src="{{ asset('/storage/services/'.$service->service_image) }}" alt="" width="100">
                            <a href="{{ route('admin.removeimgservice', $service->id) }}" class="bg-danger text-white cross-btn">×</a>
                            @else
                            <img id="blah" src="{{ asset('images/download(2).png') }}" alt="upload image to view" width="100" />
                            @endif
                        </div>
                        @else
                        <div class="form-group col-md-3">
                            <label for="servicesImage">Service Image</label>
                            <input required type="file" name="service_image" class="form-control-file" id="servicesImage" value="{{ isset($service) ? $service->image : '' }}" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                        </div>
                        <div class="form-group col-md-3">
                            <img id="blah" src="{{ asset('images/download(2).png') }}" alt="upload image to view" width="100" />
                        </div>
                        @endif

                        <div class="form-group col-md-12">
                            <label for="serviceDescription">Service Description</label>
                            <textarea name="service_description" class="form-control" id="serviceDescription" rows="3" maxlength="250">{{ isset($service) ? $service->service_description : '' }}</textarea>
                            <div id="charactersRemaining" class="float-right">250 characters Remaining</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="servicesseocategoryTitle">Service SEO Title</label>
                            <input type="text" name="service_seo_title" class="form-control" id="servicesseocategoryTitle" aria-describedby="servicesseocategoryTitleHelp" placeholder="Enter Service SEO Title" value="{{ isset($service) ? $service->service_seo_title : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="servicesseocategoryKeyword">Service SEO Keyword</label>
                            <input type="text" name="service_seo_keyword" class="form-control" id="servicesseocategoryKeyword" aria-describedby="servicesseocategoryKeywordHelp" placeholder="Enter Service SEO Keyword" value="{{ isset($service) ? $service->service_seo_keyword : '' }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="servicesseocategoryDescription">Service SEO Description</label>
                            <textarea name="service_seo_description" id="servicesseocategoryDescription" class="form-control" rows="3">{{ isset($service) ? $service->service_seo_description : '' }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">{{ isset($service) ? 'Update' : 'Save' }}</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection('content')

@section('scripts')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#servicesImage").change(function() {
        readURL(this);
    });
</script>
<script>
    var el;

    function countCharacters(e) {
        // setup some variables 
        var textEntered, countRemaining, counter;
        // get the number of characters in the tweet box 
        textEntered = document.getElementById('serviceDescription').value;
        // number left = number of characters - our maximum (140) 
        counter = (250 - (textEntered.length));
        // access the div for characters remaining 
        countRemaining = document.getElementById('charactersRemaining');
        // put the number of characters left into that div! 
        countRemaining.textContent = counter;
    }
    el = document.getElementById('serviceDescription');
    el.addEventListener('keyup', countCharacters, false);
</script>
@endsection