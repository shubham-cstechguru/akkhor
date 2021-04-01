@extends('backend.layouts.app')

@section('title', isset($testimonial) ? 'Edit Testimonial' : 'Add Testimonial')

@section('css')
@endsection

@section('content')

<h1 class="mt-4">{{ isset($testimonial) ? 'Edit Testimonial' : 'Add Testimonial' }}</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('admin.testimonial.index') }}">Testimonials</a></li>
    <li class="breadcrumb-item active">{{ isset($testimonial) ? 'Edit testimonial' : 'Add testimonial' }}</li>
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
                <form method="POST" action="{{ isset($testimonial) ? route('admin.testimonial.update', $testimonial->id) : route('admin.testimonial.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @if(isset($testimonial))
                    @method('PUT')
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="testimonialTitle">Testimonial Name</label>
                            <input required type="text" name="t_name" class="form-control name" id="testimonialTitle" aria-describedby="testimonialTitleHelp" placeholder="Enter Testimonial Name" value="{{ isset($testimonial) ? $testimonial->t_name : '' }}">
                        </div>

                        @if(isset($testimonial))
                        <div class="form-group col-md-3">
                            <label for="testimonialImage">Testimonial Image</label>
                            <input type="file" name="t_image" class="form-control-file" id="testimonialImage" value="{{ isset($testimonial) ? $testimonial->t_image : '' }}" accept="image/x-png,image/jpeg,image/jpg">
                        </div>
                        <div class="form-group col-md-3">
                            @if($testimonial->t_image != '')
                            <img id="blah" src="{{ asset('/storage/testimonial/'.$testimonial->t_image) }}" alt="" width="100">
                            <a href="{{ route('admin.removeimgtestimonial', $testimonial->id) }}" class="bg-danger text-white cross-btn">×</a>
                            @else
                            <img id="blah" src="{{ asset('images/download(2).png') }}" alt="upload image to view" width="100" />
                            @endif
                        </div>
                        @else
                        <div class="form-group col-md-3">
                            <label for="testimonialImage">Testimonal Image</label>
                            <input required type="file" name="t_image" class="form-control-file" id="testimonialImage" value="{{ isset($testimonial) ? $testimonial->t_image : '' }}" accept="image/x-png,image/jpeg,image/jpg">
                        </div>
                        <div class="form-group col-md-3">
                            <img id="blah" src="{{ asset('images/download(2).png') }}" alt="upload image to view" width="100" />
                        </div>
                        @endif

                        <div class="form-group col-md-12">
                            <label for="testimonialDescription">Testimonial</label>
                            <textarea required name="t_testimonial" id="testimonialDescription" class="form-control" rows="3" maxlength="250">{{ isset($testimonial) ? $testimonial->t_testimonial : '' }}</textarea>
                            <div id="charactersRemaining" class="float-right">250 characters Remaining</div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">{{ isset($testimonial) ? 'Update' : 'Save' }}</button>
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

    $("#testimonialImage").change(function() {
        readURL(this);
    });
</script>
<script>
    var el;

    function countCharacters(e) {
        // setup some variables 
        var textEntered, countRemaining, counter;
        // get the number of characters in the tweet box 
        textEntered = document.getElementById('testimonialDescription').value;
        // number left = number of characters - our maximum (140) 
        counter = (250 - (textEntered.length));
        // access the div for characters remaining 
        countRemaining = document.getElementById('charactersRemaining');
        // put the number of characters left into that div! 
        countRemaining.textContent = counter;
    }
    el = document.getElementById('testimonialDescription');
    el.addEventListener('keyup', countCharacters, false);
</script>
@endsection