@extends('layouts.theme')
@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 style="color:black;" class="card-title mb-0">Success Story</h4>
            </div>
            <div>
                <a href="{{ route('indexAddSuccess') }}"><button class="btn btn-primary">Add Success Story</button></a>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-data3">
                        <thead class="thead-dark">
                            <tr>
                                <th>Card Title</th>
                                <th>Platform</th>
                                <th>Adveritser Name</th>
                                <th>Placement</th>
                                <th>Campaign Objective</th>
                                <th>Campaign Module</th>
                                <th>Campaign Duration</th>
                                <th>Success Card</th>
                                <th>Advertiser Logo</th>
                                <th>Middle Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="color:black">
                            @foreach($success as $list)
                           <tr>
                                <td>{{$list->ss_title}}</td>
                                <td>{{$list->platform_name}}</td>
                                <td>{{$list->adveritser_name}}</td>
                                <td>{{$list->placement}}</td>
                                <td>{{$list->campaign_objective}}</td>
                                <td>{{$list->campaign_module}}</td>
                                <td>{{$list->campaign_duration}}</td>

                                <td> <img src="{{(!empty($list->ss_card))?
                          url('/upload/sscard/'.$list->ss_card):url('/upload/nofound.png')}}" alt=""
                                        style="width:150px;height:160px; border:1px solid #000" width="200" height="80">
                                </td>

                                <td> <img src="{{(!empty($list->content_image))?
                                    url('/upload/advertiserlogo/'.$list->content_image):url('/upload/nofound.png')}}" alt=""
                                                  style="width:150px;height:160px; border:1px solid #000" width="200" height="80">
                                          </td>

                                <td> <iframe style="width:150px;height:160px; border:1px solid #000" src="{{(!empty($list->content_video))?
                          url('/upload/content/'.$list->content_video):url('/upload/nofound.png')}}">
                                    </iframe></td>

                                <td>
                                    <a href="{{url('admin/success/edit')}}/{{$list->id}}"><button type="button"
                                            class="btn btn-success">Edit</button></a>
                                    <a href="{{url('admin/success/delete/')}}/{{$list->id}}"><button type="button"
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
