@extends('layouts.app')


@section('content')
    <div class="container parent-table">
        <div class="col-md-12">
            <div class="col-md-8">
                <h1>All Image</h1>

                <table class="table table-bordered table-left">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($contact as $con)
                        <tr>
                            <td>{{$con->title}}</td>
                            <td><img src="{{asset('images')}}/{{$con->filename}}" style="max-width: 60px;"></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>

            <div class="col-md-4">
                <a href="{{route('contact.create')}}" class="self-btn">Add image</a>
            </div>
        </div>



    </div>


    <style>


    </style>


@endsection
