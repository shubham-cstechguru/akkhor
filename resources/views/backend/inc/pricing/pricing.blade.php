@extends('backend.layouts.app')

<!-- @section('title', 'Home Page') -->

@section('css')
{{ Html::style('Admin/css/trix.css') }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">{{ isset($pricing) ? 'Edit Pricing' : 'Add Pricing' }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.pricing.index') }}">Pricing</a></li>
            <li class="breadcrumb-item active">{{ isset($pricing) ? 'Edit pricing' : 'Add pricing' }}</li>
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
                        <form method="POST" action="{{ isset($pricing) ? route('admin.pricing.update', $pricing->id) : route('admin.pricing.store') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if(isset($pricing))
                            @method('PUT')
                            @endif
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pricingTitle">Pricing Title</label>
                                    <input type="text" name="pricing_title" class="form-control" id="pricingTitle" aria-describedby="pricingTitleHelp" placeholder="Enter Pricing Name" value="{{ isset($pricing) ? $pricing->pricing_title : '' }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" id="price" aria-describedby="priceHelp" placeholder="Enter Price" value="{{ isset($pricing) ? $pricing->price : '' }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pricingDescription">Pricing Description</label>
                                    <input id="pricingDescription" type="hidden" name="pricing_description" value="{{ isset($pricing) ? $pricing->pricing_description : '' }}">
                                    <trix-editor input="pricingDescription"></trix-editor>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pricingPoints">Pricing Points</label>
                                    <a type="button" name="button" class="text-success col-md-3 mt-1" id="add" href="javascript:void(0);">
                                        <i class="fas fa-plus mr-1"></i>
                                        Add Points
                                    </a>
                                    <div id="dynamicRow">
                                        <div class="mt-2 row">
                                            <input type="text" name="pricing_points[0]" class="form-control input-row col-md-8 mt-3" id="pricingPoints" aria-describedby="pricingPointsHelp" placeholder="Enter Pricing points" value="{{ isset($pricing) ? $pricing->pricing_points : '' }}">
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ isset($category) ? 'Update' : 'Save' }}</button>
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

<script type="text/javascript">
    var i = 0;
    var addButton = $('#add'); //Add button selector
    var wrapper = $('#dynamicRow'); //Input field wrapper
    $(addButton).click(function() {
        
        ++i;
        $(wrapper).append(' <div class="mt-2 row"><input type="text" name="pricing_points[' + i + ']" class="form-control input-row col-md-8 mt-3" placeholder="Enter Pricing points" value="{{ isset($pricing) ? $category->pricing_points : '' }}" > <a type="button" name="button" class="text-danger col-md-2 mt-3 remove-row" href="javascript:void(0);">          <i class="fas fa-minus mr-1"></i>        </a> </div>');
    });

    $(wrapper).on('click', '.remove-row', function(e) {
        e.preventDefault();
        $(this).parent('.row').remove();
        i--;
    });
</script>
@endsection