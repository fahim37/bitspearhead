@extends('layouts.theme')
@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 style="color:black;" class="card-title mb-0">Success History Attribute</h4>
            </div>
            <div>
                <a href="{{ route('indexAddSuccessAttribute') }}"><button class="btn btn-primary">Add Success Attribute</button></a>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>Card Title, Platform Name</th>
                                <th>Title</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="color:black">
                            @foreach($success_attr as $list)
                            <tr>
                                <td>{{ optional($list->success)->ss_title .', '.optional($list->success)->platform_name }}</td>
                                <td>{{$list->title}}</td>
                                <td>{{$list->dynamic_field}}</td>
                                <td>
                                    <a href="{{url('admin/success-attribute/edit')}}/{{$list->id}}"><button type="button"
                                            class="btn btn-success">Edit</button></a>
                                    <a href="{{url('admin/success-attribute/delete/')}}/{{$list->id}}"><button type="button"
                                            class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>

        @endsection
