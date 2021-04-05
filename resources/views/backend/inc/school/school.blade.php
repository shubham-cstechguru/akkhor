@extends('backend.layouts.app')

@section('title', isset($school) ? 'Edit School' : 'Add School')


@section('content')

<h1 class="mt-4">{{ isset($school) ? 'Edit School' : 'Add School' }}</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('admin.school.index') }}">School</a></li>
    <li class="breadcrumb-item active">{{ isset($school) ? 'Edit School' : 'Add School' }}</li>
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
                <form method="POST" action="{{ isset($school) ? route('admin.school.update', $school->id) : route('admin.school.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @if(isset($school))
                    @method('PUT')
                    @endif
                    <div class="form-row">

                        <div class="form-group col-md-2">
                            <label for="title">Title</label>
                            <select class="form-control" id="title">
                                <option value="Mr">Mr.</option>
                                <option value="Ms">Ms.</option>
                                <option value="Mrs">Mrs.</option>
                            </select>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="fname">First name</label>
                            <input required type="text" name="user[fname]" class="form-control" id="fname" aria-describedby="fnameHelp" placeholder="Enter First Name" value="{{ isset($school) ? $school->fname : '' }}">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="lname">Last name</label>
                            <input required type="text" name="user[lname]" class="form-control" id="lname" aria-describedby="lnameHelp" placeholder="Enter Last Name" value="{{ isset($school) ? $school->lname : '' }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile Number</label>
                            <input required type="tel" name="user[mobile]" class="form-control" id="mobile" aria-describedby="mobileHelp" placeholder="Enter Mobile Number" value="{{ isset($school) ? $school->mobile : '' }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email id</label>
                            <input required type="email" name="user[email]" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Id" value="{{ isset($school) ? $school->email : '' }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="dob">DOB</label>
                            <input  class="form-control" name="user[dob]" type="date" placeholder="click to show datepicker"  id="dob">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="siteaddress1">Address 1</label>
                            <textarea name="user[address1]" id="siteaddress1" class="form-control" rows="3">{{ isset($school) ? $school->address1 : '' }}</textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="siteaddress2">Address 2</label>
                            <textarea name="user[address2]" id="siteaddress2" class="form-control" rows="3">{{ isset($school) ? $school->address2 : '' }}</textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="selectcity">Select City</label>
                            <select required class="form-control" name="user[city_id]" id="selectcity">
                                @foreach($city as $c)

                                <option value="{{ $c->id }}" @if(isset($school)) @if($c->id == $school->id)
                                    selected
                                    @endif
                                    @endif
                                    >{{ $c->name }}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pincode">Pin Code</label>
                            <input required type="number" name="user[pin_code]" class="form-control" id="pincode" aria-describedby="pincodeHelp" placeholder="Enter Pin Code" value="{{ isset($school) ? $school->pin_code : '' }}">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">{{ isset($school) ? 'Update' : 'Save' }}</button>
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
    var el;

    function countCharacters(e) {
        // setup some variables 
        var textEntered, countRemaining, counter;
        // get the number of characters in the tweet box 
        textEntered = document.getElementById('blogshortdescTitle').value;
        // number left = number of characters - our maximum (140) 
        counter = (250 - (textEntered.length));
        // access the div for characters remaining 
        countRemaining = document.getElementById('charactersRemaining');
        // put the number of characters left into that div! 
        countRemaining.textContent = counter;
    }
    el = document.getElementById('blogshortdescTitle');
    el.addEventListener('keyup', countCharacters, false);
</script>
@endsection