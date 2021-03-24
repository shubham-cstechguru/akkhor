@extends('backend.layouts.app')

<!-- @section('title', 'Home Page') -->

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">View Request Enquiry</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">View Request Enquiry</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No.</th>
                                <th>Company Detail</th>
                                <th>Message</th>
                                <th>Demo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach($req as $r)
                            <tr>
                                <td>{{ $i++ }}.</td>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->email }}</td>
                                <td>{{ $r->phoneno }}</td>
                                <td>
                                    <ol>
                                        @if($r->company!='')
                                        <li>{{ $r->company }}</li>
                                        @else
                                        @endif
                                        @if($r->designation!='')
                                        <li>{{ $r->designation }}</li>
                                        @else
                                        @endif
                                        @if($r->requestedUrl!='')
                                        <li>{{ $r->requestedUrl }}</li>
                                        @else
                                        @endif
                                    </ol>
                                </td>
                                <td>{{ $r->message }}</td>
                                <td>
                                    <ol>
                                        <li>{{ $r->test }}</li>
                                        <li>{{ $r->daysToFinalize }}</li>
                                    </ol>
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