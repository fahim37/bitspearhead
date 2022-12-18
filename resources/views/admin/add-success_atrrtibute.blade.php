@extends('layouts.theme')
@section('content')
    {{-- <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <h3 style="color:black;"> Add Success History </h3>
            <div>
                <a href="{{ route('indexSuccess') }}"><button class="btn btn-danger">Success History</button></a>
            </div>
        </div>
        <div class="card-body">
            <div class="example">
                <form action="{{ route('storeSuccess') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row pl-3">

                        <div class="mb-3 col-6">
                            <label for="crop_type" class="control-label mb-1" style="color:black;">Select Success History</label>
                            <select id="crop_type" class="form-control" name="ss_story_id">
                                @foreach ($success as $success)
                                <option value="{{ $success->id }}">{{ $success->ss_title }}</option>
                                @endforeach

                            </select>
                            @if ($errors->has('crop_type'))
                            <span class="text-danger">{{ $errors->first('crop_type') }}</span>
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




                    <button type="submit" class="btn btn-primary ml-3 ml-0">Submit</button>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <form action="{{ route('storeSuccessAttr') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th style="color:white">Card title, Platform name</th>
                    <th style="color:white">Title</th>
                    <th style="color:white">Value</th>
                    <th style="color:white">Action</th>
                </tr>
                <tr>
                    <td> <select id="ss_story_id" class="form-control" name="addMoreInputFields[0][ss_story_id]" >
                            @foreach ($success as $success)
                                <option value="{{ $success->id }}">{{ $success->ss_title .', '. $success->platform_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td><input type="text" name="addMoreInputFields[0][title]" placeholder="Enter title"
                            class="form-control" />
                    <td><input type="text" name="addMoreInputFields[0][dynamic_field]" placeholder="Enter value"
                            class="form-control" />
                    </td>
                    <td><button type="submit" class="btn btn-outline-success btn-block">Save</button></td>
                </tr>
            </table>
            
        </form>
    </div>
    </body>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][title]" placeholder="Enter title" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][title]" placeholder="Enter title" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );

            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][dynamic_field]" placeholder="Enter Description" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
@endsection
