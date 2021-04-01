@extends('backend.layouts.app')

@section('title', 'View Category')

@section('content')

<h1 class="mt-4">View Blog Category</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('admin.blogcategory.index') }}">Blog Category</a></li>
    <li class="breadcrumb-item active">View Category</li>
</ol>
<div class="card mb-4">
    <div class="card-header text-right">
        <a type="button" name="button" class="btn btn-success" href="{{ route('admin.blogcategory.create') }}">
            <i class="fas fa-plus mr-1"></i>
            Add Blog Category
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered yajra-datatable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Blog Category Title</th>
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
                                <h5 class="modal-title" id="deleteModalLabel">Delete Blog Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure to want to Delete This Blog Category ?
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
@endsection('content')

@section('scripts')
<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteFormModal')
        form.action = '/admin-control/blogcategory/' + id
        console.log('deleting', form)
        $('#deleteModal').modal('show')
    }
</script>
<script type="text/javascript">
    $(function() {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.blogcategory.list') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'category_title',
                    name: 'category_title'
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