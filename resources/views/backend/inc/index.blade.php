@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')

<h1 class="mt-4">Dash Board</h1>
<ol class="breadcrumb my-4">
    <li class="breadcrumb-item">Dashboard</li>
</ol>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Pricing
            </div>
            <div class="card-body">
                <p class="card-text">Add Pricing Plans.</p>
                <a href="{{ route('admin.pricing.create') }}" class="btn btn-primary">Add</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Services
            </div>
            <div class="card-body">
                <p class="card-text">Add Services</p>
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Pages
            </div>
            <div class="card-body">
                <p class="card-text">View Pages</p>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Blogs
            </div>
            <div class="card-body">
                <p class="card-text">Add Blogs.</p>
                <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">Add</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Testimonials
            </div>
            <div class="card-body">
                <p class="card-text">Add Testimonials</p>
                <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary">Add</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Home Page Setting
            </div>
            <div class="card-body">
                <p class="card-text">Edit Home Settings.</p>
                <a href="{{ route('admin.home') }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Demo Enquiry</b></div>
            <div class="panel-body">
                <canvas id="myChart" height="280" width="600"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Contact Enquiry</b></div>
            <div class="panel-body">
                <canvas id="Chart" height="280" width="600"></canvas>
            </div>
        </div>
    </div>
</div>

@endsection('content')

@section('scripts')
{{ Html::script('Admin/js/Chart.min.js') }}
{{ Html::script('Admin/js/chart-area-demo.js') }}
{{ Html::script('Admin/js/chart-bar-demo.js') }}
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById('Chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endsection