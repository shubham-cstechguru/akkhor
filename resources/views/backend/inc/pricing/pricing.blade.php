@extends('backend.layouts.app')

<!-- @section('title', 'Home Page') -->

@section('css')
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
                        <form method="POST" action="{{ isset($pricing) ? route('admin.pricing.update', $pricing['id']) : route('admin.pricing.store') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if(isset($pricing))
                            @method('PUT')
                            @endif
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pricingTitle">Pricing Title</label>
                                    <input type="text" name="pricing_title" class="form-control" id="pricingTitle" aria-describedby="pricingTitleHelp" placeholder="Enter Pricing Name" value="{{ isset($pricing) ? $pricing['pricing_title'] : '' }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" id="price" aria-describedby="priceHelp" placeholder="Enter Price" value="{{ isset($pricing) ? $pricing['price'] : '' }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pricingDescription">Pricing Description</label>
                                    <textarea name="pricing_description" id="pricingDescription" class="form-control" rows="3">{{ isset($pricing) ? $pricing['pricing_description'] : '' }}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pricingPoints">Pricing Points</label>
                                    <a type="button" name="button" class="text-success col-md-3 mt-1" id="add" href="javascript:void(0);">
                                        <i class="fas fa-plus mr-1"></i>
                                        Pricing Points
                                    </a>
                                    <div id="dynamicRow">
                                        @if(isset($pricing))
                                        @foreach($pricing['pricing_points'] as $price_point)
                                        <div class="mt-2 d-flex"><input type="text" name="pricing_points[]" class="form-control input-row mt-3 mr-2" placeholder="Enter Pricing points" value="{{ $price_point }}"> <a type="button" name="button" class="text-danger mt-3 remove-row" href="javascript:void(0);"> <i class="fas fa-minus mr-1"></i> </a> </div>
                                        @endforeach
                                        @else
                                        <div class="mt-2 d-flex">
                                            <input type="text" name="pricing_points[]" class="form-control input-row col-md-8 mt-3" id="pricingPoints" aria-describedby="pricingPointsHelp" placeholder="Enter Pricing points" value="">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ isset($pricing) ? 'Update' : 'Save' }}</button>
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
<script type="text/javascript">
    var addButton = $('#add'); //Add button selector
    var wrapper = $('#dynamicRow'); //Input field wrapper
    $(addButton).click(function() {
        $(wrapper).append(' <div class="mt-2 d-flex"><input type="text" name="pricing_points[]" class="form-control input-row mt-3 mr-2" placeholder="Enter Pricing points" value="" > <a type="button" name="button" class="text-danger mt-3 remove-row" href="javascript:void(0);">          <i class="fas fa-minus mr-1"></i>        </a> </div>');
    });

    $(wrapper).on('click', '.remove-row', function(e) {
        e.preventDefault();
        $(this).parent('.d-flex').remove();
    });
</script>
@endsection