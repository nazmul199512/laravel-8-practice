@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-8">
                <h1>All Image</h1>

                <table class="table table-bordered table-left">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($contact as $con)
                        <tr>
                            <td>{{$con->title}}</td>
                            <td><img src="{{asset('images')}}/{{$con->filename}}" style="max-width: 60px;"></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="#" data-toggle="modal"
                                   data-target="#editcontact{{$con->id}}">
                                    <i class="fa fa-edit"></i> Edit</a>
                            </td>

                            <td>
                                <a class="btn btn-sm btn-danger" href="#"
                                   data-toggle="modal" data-target="#delete{{$con->id}}">
                                    <i class="fa fa-trash"></i>
                                    Del
                                </a>

                            </td>

                        </tr>

                        {{--Edit contact--}}

                        <div class="modal right fade" id="editcontact{{$con->id}}" data-backdrop="static"
                             data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="staticBackdropLabel">EDIT CONTACT</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="modal-body">
                                            <form action="{{route('contact.update', $con->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label for="">Product Name</label>
                                                    <input type="text" name="title" id=""
                                                           value="{{$con->title}}"
                                                           class="form-control">
                                                </div>


                                                <div class="modal-footer">
                                                    <button class="btn btn-warning btn-block">Update
                                                    </button>
                                                </div>


                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--Delete contact--}}


                        <div class="modal right fade" id="delete{{$con->id}}"
                             data-backdrop="static" data-keyboard="false" tabindex="-1"
                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="staticBackdropLabel">DELETE CONTACT</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>


                                    </div>

                                    <div class="modal-body">
                                        <form action="{{route('contact.destroy', $con->id)}}"
                                              method="post">
                                            @csrf
                                            @method('delete')
                                            <p>Are you sure want to delete {{$con->title}} ?</p>

                                            <div class="modal-footer">
                                                <button class="btn btn-default" data-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </div>


                                        </form>

                                    </div>


                                </div>
                            </div>
                        </div>




                    @endforeach
                    </tbody>

                </table>


                <div class="col-md-4">

                    <a href="{{route('contact.create')}}" class="self-btn">Add image</a>

                </div>

            </div>


        </div>


        <style>


        </style>


@endsection
