@extends('backend.layouts.app')

@section('title', 'Setting Page')

@section('css')
@endsection

@section('content')

<h1 class="mt-4">Edit Web Settings</h1>
<ol class="breadcrumb my-4">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Edit Settings</li>
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
                <form method="POST" action="{{ route('admin.setting.post') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="siteTitle">Site Name</label>
                            <input required type="text" name="title" class="form-control name" id="siteTitle" aria-describedby="siteTitleHelp" placeholder="Enter Site Name" value="{{ $setting['title'] }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="siteTagline">Site TagLine</label>
                            <input required type="text" name="tagline" class="form-control" id="siteTagline" aria-describedby="siteTaglineHelp" placeholder="Enter Site Tagline" value="{{ $setting['tagline'] ?? '' }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="siteLogo">Site Logo</label>
                            <input type="file" name="logo" class="form-control-file" id="siteLogo" accept="image/png">
                        </div>
                        <div class="form-group col-md-3">
                            @if($setting['logo'] != '')
                            <img id="blah" src="{{ asset('/storage/logo/'.$setting['logo']) }}" alt="" width="100">
                            @else
                            <img id="blah" src="{{ asset('images/download(2).png') }}" alt="" width="100">
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="siteFavicon">Site Favicon</label>
                            <input type="file" name="favicon" class="form-control-file" id="siteFavicon" accept="image/png">
                        </div>
                        <div class="form-group col-md-3">
                            @if($setting['favicon'] != '')
                            <img id="blahsiteFavicon" src="{{ asset('/storage/favicon/'.$setting['favicon']) }}" alt="" width="20">
                            @else
                            <img id="blahsiteFavicon" src="{{ asset('images/download(2).png') }}" alt="" width="20">
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label for="sitemobile">Site Mobile No.</label>
                            <input required type="tel" name="mobile" class="form-control mobile" id="sitemobile" aria-describedby="sitemobileHelp" placeholder="Enter Mobile No." value="{{ $setting['mobile'] ?? '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="siteemail">Site Email</label>
                            <input required type="email" name="email" class="form-control" id="siteemail" aria-describedby="siteemailHelp" placeholder="Enter Email Id" value="{{ $setting['email'] ?? '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="siteaddress">Site Address</label>
                            <textarea name="address" id="siteaddress" class="form-control" rows="3">{{ $setting['address'] ?? '' }}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sitegooglemaps">Site Google Maps</label>
                            <textarea name="google_maps" id="sitegooglemaps" class="form-control web" rows="3">{{ $setting['google_maps'] ?? '' }}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sitefacebook">Site Facebook Page</label>
                            <input type="text" name="facebook" class="form-control web" id="sitefacebook" aria-describedby="sitefacebookHelp" placeholder="Enter Facebook Page Url" value="{{ $setting['facebook'] ?? '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sitetwitter">Site Twitter Page</label>
                            <input type="text" name="twitter" class="form-control web" id="sitetwitter" aria-describedby="sitetwitterHelp" placeholder="Enter Twitter Page Url" value="{{ $setting['twitter'] ?? '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sitelinkedin">Site Linkedin Page</label>
                            <input type="text" name="linkedin" class="form-control web" id="sitelinkedin" aria-describedby="sitelinkedinHelp" placeholder="Enter Linkedin Page Url" value="{{ $setting['linkedin'] ?? '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="siteyoutube">Site Youtube Video</label>
                            <input type="text" name="youtube" class="form-control" id="siteyoutube" aria-describedby="siteyoutubelHelp" placeholder="Enter Youtube Video Id" value="{{ $setting['youtube'] ?? '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sitesmsapi">Site SMS Api</label>
                            <input type="text" name="sms_api" class="form-control web" id="sitesmsapi" aria-describedby="sitesmsapilHelp" placeholder="Enter Sms Api Url" value="{{ $setting['sms_api'] ?? '' }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection('content')

@section('scripts')
{{ Html::script('Admin/js/trix.js') }}

<script>
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#siteLogo").change(function() {
        readURL2(this);
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