@extends('backend.layouts.app')

@section('title', 'Setting Page')

@section('css')
@endsection

@section('content')

<main>
    <div class="container-fluid">
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
                                    <input required type="text" name="title" class="form-control" id="siteTitle" aria-describedby="siteTitleHelp" placeholder="Enter Site Name" value="{{ $setting['title'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="siteTagline">Site TagLine</label>
                                    <input required type="text" name="tagline" class="form-control" id="siteTagline" aria-describedby="siteTaglineHelp" placeholder="Enter Site Tagline" value="{{ $setting['tagline'] }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="siteLogo">Site Logo</label>
                                    <input required type="file" name="logo" class="form-control-file" id="siteLogo" accept="image/png">
                                </div>
                                <div class="form-group col-md-3">
                                    <img id="blah" src="{{ asset('/storage/logo/'.$setting['logo']) }}" alt="" width="100">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="siteFavicon">Site Favicon</label>
                                    <input required type="file" name="favicon" class="form-control-file" id="siteFavicon" accept="image/png">
                                </div>
                                <div class="form-group col-md-3">
                                    <img id="blahsiteFavicon" src="{{ asset('/storage/favicon/'.$setting['favicon']) }}" alt="" width="100">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="sitemobile">Site Mobile No.</label>
                                    <input required type="number" name="mobile" class="form-control" id="sitemobile" aria-describedby="sitemobileHelp" placeholder="Enter Mobile No." value="{{ $setting['mobile'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="siteemail">Site Email</label>
                                    <input required type="text" name="email" class="form-control" id="siteemail" aria-describedby="siteemailHelp" placeholder="Enter Email Id" value="{{ $setting['email'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="siteaddress">Site Address</label>
                                    <input required type="text" name="address" class="form-control" id="siteaddress" aria-describedby="siteaddressHelp" placeholder="Enter Address" value="{{ $setting['address'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sitegoogle_maps">Site Google Maps</label>
                                    <input type="text" name="google_maps" class="form-control" id="sitegoogle_maps" aria-describedby="sitegoogle_mapsHelp" placeholder="Enter Google Maps" value="{{ $setting['google_maps'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sitefacebook">Site Facebook Page</label>
                                    <input type="text" name="facebook" class="form-control" id="sitefacebook" aria-describedby="sitefacebookHelp" placeholder="Enter Mobile No." value="{{ $setting['facebook'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sitetwitter">Site Twitter Page</label>
                                    <input type="text" name="twitter" class="form-control" id="sitetwitter" aria-describedby="sitetwitterHelp" placeholder="Enter Email Id" value="{{ $setting['twitter'] }}">
                                </div><div class="form-group col-md-6">
                                    <label for="sitelinkedin">Site Linkedin Page</label>
                                    <input type="text" name="linkedin" class="form-control" id="sitelinkedin" aria-describedby="sitelinkedinHelp" placeholder="Enter Mobile No." value="{{ $setting['linkedin'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="siteyoutube">Site Youtube Video</label>
                                    <input type="text" name="youtube" class="form-control" id="siteyoutube" aria-describedby="siteyoutubelHelp" placeholder="Enter Email Id" value="{{ $setting['youtube'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sitesms_api">Site SMS Api</label>
                                    <input type="text" name="sms_api" class="form-control" id="sitesms_api" aria-describedby="sitesms_apilHelp" placeholder="Enter Email Id" value="{{ $setting['sms_api'] }}">
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