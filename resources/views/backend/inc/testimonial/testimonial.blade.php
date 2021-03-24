@extends('backend.layouts.app')

<!-- @section('title', 'Home Page') -->

@section('css')
@endsection

@section('content')

<main>
    <div class="container-fluid">
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
                                    <input type="text" name="t_name" class="form-control" id="testimonialTitle" aria-describedby="testimonialTitleHelp" placeholder="Enter Testimonial Name" value="{{ isset($testimonial) ? $testimonial->t_name : '' }}">
                                </div>

                                @if(isset($testimonial))
                                <div class="form-group col-md-3">
                                    <label for="testimonialImage">Testimonial Image</label>
                                    <input type="file" name="t_image" class="form-control-file" id="testimonialImage" value="{{ isset($testimonial) ? $testimonial->t_image : '' }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <img id="blah" src="{{ asset("/storage/testimonial/".$testimonial->t_image) }}" alt="" width="100">
                                </div>
                                @else
                                <div class="form-group col-md-3">
                                    <label for="testimonialImage">Testimonal Image</label>
                                    <input type="file" name="t_image" class="form-control-file" id="testimonialImage" value="{{ isset($testimonial) ? $testimonial->t_image : '' }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <img id="blah" src="#" alt="upload image to view" width="100" />
                                </div>
                                @endif

                                <div class="form-group col-md-12">
                                    <label for="testimonialDescription">Testimonial</label>
                                    <textarea name="t_testimonial" id="testimonialDescription" class="form-control" rows="3">{{ isset($testimonial) ? $testimonial->t_testimonial : '' }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ isset($testimonial) ? 'Update' : 'Save' }}</button>
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
@endsection