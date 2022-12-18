@extends('layouts.theme')
@section('content')
    <div class="mi-card mb-4">
        <div class="mi-header d-flex justify-content-between">
            Brand Form
            <div>
                <a href="{{ route('indexBrand') }}"><button class="btn btn-danger">Back</button></a>
            </div>
        </div>
        <div class="mi-body">
            <div class="example">
                <form action="{{ route('storeBrand') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="row pl-3">
                            <div class="mb-3 col-6">
                                <label for="exampleInputFarmer" class="form-label" style="color:white;">Brand Logo </label>
                                <input type="file" name="brand_logo" class="form-control" id="exampleInputFarmer"
                                    aria-describedby="emailHelp" />
                                @if ($errors->has('brand_logo'))
                                    <span class="text-danger">{{ $errors->first('brand_logo') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <button type="submit" class="btn btn-primary ml-3">Submit</button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
