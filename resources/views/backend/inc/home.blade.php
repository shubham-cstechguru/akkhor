@extends('backend.layouts.app')

<!-- @section('title', 'Home Page') -->

@section('css')
@endsection

@section('content')

<main>
    <div class="container-fluid">
    <h1 class="mt-4">Home Page Settings</h1>
        <ol class="breadcrumb my-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Home Page Settings</li>
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
                        <form method="POST" action="{{ route('admin.home.post') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="slider_title">Slider Title</label>
                                    <input type="text" name="slider_title" class="form-control" id="slider_title" aria-describedby="slider_titleeHelp" placeholder="Enter Site Name" value="{{ $home['slider_title'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="slider_description">Slider Description</label>
                                    <textarea name="slider_description" id="slider_description" class="form-control" rows="3">{{$home['slider_description']}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="salient_title">Salient Title</label>
                                    <input type="text" name="salient_title" class="form-control" id="salient_title" aria-describedby="salient_titleHelp" placeholder="Enter Site Tagline" value="{{ $home['salient_title'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="salient_desc">Salient Description</label>
                                    <textarea name="salient_desc" id="salient_desc" class="form-control" rows="3">{{$home['salient_desc']}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="service_title">Service Title</label>
                                    <input type="number" name="mobile" class="form-control" id="service_title" aria-describedby="service_titleHelp" placeholder="Enter Mobile No." value="{{ $home['service_title'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="service_desc">Service Description</label>
                                    <textarea name="service_desc" id="service_desc" class="form-control" rows="3">{{$home['service_desc']}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="client_title">Client Title</label>
                                    <input type="text" name="email" class="form-control" id="client_title" aria-describedby="client_titleHelp" placeholder="Enter Email Id" value="{{ $home['client_title'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="client_desc">Client Description</label>
                                    <textarea name="client_desc" id="client_desc" class="form-control" rows="3">{{$home['client_desc']}}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
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

    $("#siteLogo").change(function() {
        readURL(this);
    });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blahsiteFavicon').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#siteFavicon").change(function() {
        readURL(this);
    });
</script>
@endsection