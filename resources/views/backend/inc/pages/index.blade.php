@extends('backend.layouts.app')

<!-- @section('title', 'Home Page') -->

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">View Pages</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.pages.index') }}">Pages</a></li>
            <li class="breadcrumb-item active">View Category</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Page Title</th>
                                <th>Page Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach($page as $p)
                            <tr>
                                <td>{{ $i++ }}.</td>
                                <td>{{ $p->page_title }}</td>
                                <td><img src="{{ asset("/storage/pages/".$p->page_image) }}" alt="" width="100"></td>
                                <td>
                                    <a type="button" name="button" class="btn btn-info" href="{{ route('admin.pages.edit', $p->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection('content')

@section('scripts')
@endsection