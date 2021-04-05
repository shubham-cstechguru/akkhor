@extends('backend.layouts.app')

@section('title', 'City')

@section('content')

<h1 class="mt-4">City</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">City</li>
</ol>
<div class="row">
    <div class="col-lg-5">
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
                <form method="POST" action="{{ isset($city) ? route('admin.city.update', $city->id) : route('admin.city.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @if(isset($city))
                    @method('PUT')
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="countryName">City Name</label>
                            <input required type="text" name="name" class="form-control" id="countryName" aria-describedby="countryNameHelp" placeholder="Enter City Name" value="{{ isset($city) ? $city->name : '' }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="countryCode">Select State</label>
                            <select class="form-control" name="state" id="countryCode">
                                @foreach($state as $c)
                                <option value="{{ $c->id }}" @if(isset($city)) @if($c->id == $city->state)
                                    selected
                                    @endif
                                    @endif
                                    >{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">{{ isset($city) ? 'Update' : 'Save' }}</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card mb-4">
            @if(isset($city))
            <div class="card-header text-right">
                <a type="button" name="button" class="btn btn-success" href="{{ route('admin.city.create') }}">
                    <i class="fas fa-plus mr-1"></i>
                    Add City
                </a>
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>City name</th>
                                <th>State</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form class="" action="" method="POST" id="deleteFormModal">
                                {!! csrf_field() !!}
                                @method('DELETE')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Delete Service</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to want to Delete This City ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')

@section('scripts')
<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteFormModal')
        form.action = '/admin-control/city/' + id
        console.log('deleting', form)
        $('#deleteModal').modal('show')
    }
</script>
<script type="text/javascript">
    $(function() {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.city.list') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'state',
                    name: 'state'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>
@endsection