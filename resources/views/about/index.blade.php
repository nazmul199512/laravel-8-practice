@extends('layouts.app')


@section('content')

    <div class="container">
        <h1>
           {{$ip}} <br/>
            This is about page <br/>
            {{ $url }}
        </h1>
    </div>

@endsection
