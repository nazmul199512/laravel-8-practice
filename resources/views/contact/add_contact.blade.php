@extends('layouts.app')

@section('content')
    <title> Add image</title>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add New Image
                    </div>
                    <div class="card-body">
                        @if(Session::has('add'))
                        <div class="alert alert-success" role="alert">
                           {{Session::get('add')}}
                        </div>
                        @endif

                        <form method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
                            @csrf
                             <div class="form-group">
                                 <label for="title">Title</label>
                                  <input type="text" name="title" class="form-control">
                             </div>

                            <div class="form-group">
                                <label for="file">Upload Image</label>
                                <input type="file" name="file" class="form-control" onchange="previewFile(this)">
                                <img id="img" alt="profile image" style="max-width: 130px; margin-top: 20px; display: none" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function (){
                    $("#img").attr("src", reader.result).css({display: `inline-block`});
                }
                reader.readAsDataURL(file);
            }
        }



    </script>


@endsection

