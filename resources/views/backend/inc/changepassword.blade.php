@extends('backend.layouts.app')

@section('title', 'Change Password Page')

@section('css')
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Change Password</h1>
        <ol class="breadcrumb my-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Change Password</li>
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
                        <form method="POST" action="{{ route('admin.change-password') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="current_password">Old Password</label>
                                    <input required type="password" name="current_password" class="form-control" id="current_password" aria-describedby="current_passwordeHelp" placeholder="Enter old Password" value="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="new_password">New Password</label>
                                    <input required type="password" name="new_password" class="form-control" id="new_password" aria-describedby="new_passwordHelp" placeholder="Enter New Password" value="">
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