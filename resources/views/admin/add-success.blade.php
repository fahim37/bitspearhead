@extends('layouts.theme')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <h3 style="color:black;"> Add Success Story </h3>
            <div>
                <a href="{{ route('indexSuccess') }}"><button class="btn btn-danger">Success Story</button></a>
            </div>
        </div>
        <div class="card-body">
            <div class="example">
                <form action="{{ route('storeSuccess') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row pl-3">
                        <div class="mb-3 col-12">
                        <label for="exampleInputFarmer" class="form-label" style="color:black;">Select Platform</label>
                        <select class="form-select" name="platform_name" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="Imo">Imo</option>
                            <option value="Likee">Likee</option>
                            <option value="mCanvas">mCanvas</option>
                            <option value="Gupshup">Gupshup</option>
                            <option value="Yahoo">Yahoo</option>
                            <option value="Appnext">Appnext</option>
                            <option value="Sizmek">Sizmek</option>
                            <option value="Influencer_Marketing">Influencer Marketing</option>
                            <option value="Pokkt">Pokkt</option>
                            <option value="MIQ">MIQ</option>
                            <option value="EspnCricinfo">EspnCricinfo</option>
                          </select>
                        </div>
                    </div>
                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Succss card
                                title</label>
                            <input type="text" name="ss_title" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('ss_title'))
                                <span class="text-danger">{{ $errors->first('ss_title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Adveritser Name</label>
                            <input type="text" name="adveritser_name" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('adveritser_name'))
                                <span class="text-danger">{{ $errors->first('adveritser_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Placement
                                </label>
                            <input type="text" name="placement" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('placement'))
                                <span class="text-danger">{{ $errors->first('placement') }}</span>
                            @endif
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Campagin Objective
                                </label>
                            <input type="text" name="campaign_objective" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_objective'))
                                <span class="text-danger">{{ $errors->first('campaign_objective') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Campaign module
                                </label>
                            <input type="text" name="campaign_module" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_module'))
                                <span class="text-danger">{{ $errors->first('campaign_module') }}</span>
                            @endif
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Campaign duration
                                </label>
                            <input type="text" name="campaign_duration" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_duration'))
                                <span class="text-danger">{{ $errors->first('campaign_duration') }}</span>
                            @endif
                        </div>

                    </div>



                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Advertiser Logo
                                </label>
                            <input type="file" name="content_image" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('content_image'))
                                <span class="text-danger">{{ $errors->first('content_image') }}</span>
                            @endif
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Middle content
                                </label>
                            <input type="file" name="content_video" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('content_video'))
                                <span class="text-danger">{{ $errors->first('content_video') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">SS Card Image
                                </label>
                            <input type="file" name="ss_card" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('ss_card'))
                                <span class="text-danger">{{ $errors->first('ss_card') }}</span>
                            @endif
                        </div>
                        <div class="col-6 text-dark">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Choose middle frame type:
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1" checkd>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Mobile Frame
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                Laptop Frame 
                                </label>
                              </div>
                        </div>

                    </div>



                    <button type="submit" class="btn btn-primary ml-3 ml-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
