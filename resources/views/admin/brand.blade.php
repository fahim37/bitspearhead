@extends('layouts.theme')
@section('content')

 <div class="card mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="card-title mb-0">Brand</h4>
            </div>
            <div>
                <a href="{{ route('indexAddBrand') }}"><button class="btn btn-primary">Add Brand</button></a>
            </div>
        </div>
        <div style="margin-top: 40px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 20%;">#</th>
                        <th style="width: 10%;">Brand Logo</th>
                        <th style="width: 20%; text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brand as $data)
                    <tr>
                        <td> {{ $data->id }}</td>
                        <td> <img src="{{(!empty($data->brand_logo))?
                            url('/upload/brand/'.$data->brand_logo):url('/upload/nofound.png')}}" alt=""
                                          style="width:150px;height:160px; border:1px solid #000" width="200" height="80">
                                  </td>
                        <td style="text-align: center;">
                            <a class="btn btn-info actbtn" title="edit" href="{{ url('admin/brand/edit/'.$data->id) }}"><i class="fas fa-edit" title="edit"></i></a>
                            <a class="btn btn-danger actbtn" onclick="return confirm('Are you sure to delete this brand')" href="{{ url('/admin/brand/delete/'.$data->id) }}"><i class="fas fa-trash" name="delete"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
