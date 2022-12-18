@extends('layouts.theme')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <h3 style="color:black;">Edit Success History</h3>
            <div>
                <a href="{{ route('indexSuccess') }}"><button class="btn btn-danger">Retour</button></a>
            </div>
        </div>

        <div class="card-body">
            <div class="example">
                <form action="{{ route('updateSuccess') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row pl-3">

                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Succss card
                                title</label>
                            <input type="text" name="ss_title" value="{{ $success->ss_title }}" class="form-control"
                                id="exampleInputFarmer" aria-describedby="emailHelp" />
                            @if ($errors->has('ss_title'))
                                <span class="text-danger">{{ $errors->first('ss_title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Adveritser Name</label>
                            <input type="text" name="adveritser_name" value="{{ $success->adveritser_name }}"
                                class="form-control" id="exampleInputFarmer" aria-describedby="emailHelp" />
                            @if ($errors->has('adveritser_name'))
                                <span class="text-danger">{{ $errors->first('adveritser_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputPartner" class="form-label" style="color:black;">Platform name</label>
                            <input type="text" name="platform_name" class="form-control"
                                value="{{ $success->platform_name }}" id="exampleInputPartner"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('platform_name'))
                                <span class="text-danger">{{ $errors->first('platform_name') }}</span>
                            @endif
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputAmount" class="form-label" style="color:black;">Campaign
                                objective</label>
                            <input type="text" name="campaign_objective" value="{{ $success->campaign_objective }}"
                                class="form-control" id="exampleInputcampaign_objective" aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_objective'))
                                <span class="text-danger">{{ $errors->first('campaign_objective') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Campaign module</label>
                            <input type="text" name="campaign_module" value="{{ $success->campaign_module }}"
                                class="form-control" id="exampleInputFarmer" aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_module'))
                                <span class="text-danger">{{ $errors->first('campaign_module') }}</span>
                            @endif
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Campaign
                                duration</label>
                            <input type="text" name="campaign_duration" value="{{ $success->campaign_duration }}"
                                class="form-control" id="exampleInputFarmer" aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_duration'))
                                <span class="text-danger">{{ $errors->first('campaign_duration') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="hdtuto lst increment mb-3 col-4 d-flex">
                            <label for="video" class="col-sm-3 col-form-label" style="color:black">Content
                                video:</label><br>
                            <input type="file" name="content_video" class="myfrm form-control">
                        </div>
                        @if ($errors->has('content_video'))
                            <span class="text-danger pl-3">{{ $errors->first('content_video') }}</span>
                        @endif
                        <div class="form-group col-md-4">
                            <iframe style="width:150px;height:160px; border:1px solid #000"
                                src="{{ !empty($success->content_video) ? url('/upload/' . $success->content_video) : url('/upload/nofound.png') }}">
                            </iframe>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="row">
                        <div class="hdtuto lst increment mb-3 col-4 d-flex">

                            <label for="content_image" class="col-sm-3 col-form-label" style="color:black">Content
                                Image:</label><br>
                            <input type="file" name="content_image" class="myfrm form-control">
                        </div>

                        @if ($errors->has('content_image'))
                            <span class="text-danger pl-3">{{ $errors->first('content_image') }}</span>
                        @endif

                        <div class="form-group col-md-4">
                            <img style="width:150px;height:160px; border:1px solid #000"
                                src="{{ !empty($success->content_image) ? url('/upload/' . $success->content_image) : url('/upload/nofound.png') }}">
                        </div>
                    </div>
                    <div class="row">

                        <div class="hdtuto lst increment mb-3 col-4 d-flex">

                            <label for="ss_card" class="col-sm-3 col-form-label" style="color:black">Success Card
                                image:</label><br>
                            <input type="file" name="ss_card" class="myfrm form-control">
                        </div>

                        @if ($errors->has('ss_card'))
                            <span class="text-danger pl-3">{{ $errors->first('ss_card') }}</span>
                        @endif

                        <div class="form-group col-md-4">
                            <img style="width:150px;height:160px; border:1px solid #000"
                                src="{{ !empty($success->ss_card) ? url('/upload/' . $success->ss_card) : url('/upload/nofound.png') }}">
                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{ $success->id }}">
                    <button type="submit" class="btn btn-primary ml-3 ml-0">Update</button>
                </form>
            </div>
        </div>
    @endsection
