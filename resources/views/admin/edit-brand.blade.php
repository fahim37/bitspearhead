@extends('layouts.theme')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <h3 style="color: black">Edit Brand Form</h3>
            <div>
                <a href="{{ route('indexBrand') }}"><button class="btn btn-danger">Back</button></a>
            </div>
        </div>
        <div class="card-body">
            <div class="example">
                <form method="post" action="{{ route('updateBrand') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="hdtuto lst increment mb-3 col-6 d-flex">

                            <label for="brand_logo" class="col-sm-3 col-form-label" style="color:black">Success Card
                                image:</label><br>
                            <input type="file" name="brand_logo" class="myfrm form-control">
                        </div>

                        @if ($errors->has('brand_logo'))
                            <span class="text-danger pl-3">{{ $errors->first('brand_logo') }}</span>
                        @endif

                        <div class="form-group col-md-4">
                            <img style="width:150px;height:160px; border:1px solid #000"
                                src="{{ !empty($brand->brand_logo) ? url('/upload/brand/'. $brand->brand_logo) : url('/upload/nofound.png') }}">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$brand->id}}">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
