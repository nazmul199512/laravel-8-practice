@extends('layouts.app')


@section('content')

    <div class="container">
        <table class="table table-bordered table-condensed">
            <thead>
             <tr>
                 <th>ID</th>
                 <th>Post title</th>
                 <th>About</th>
                 <th>Content</th>


             </tr>
            </thead>

            <tbody>
            @foreach($posts as $post)
             <tr>
                 <td>{{ $post->id }}</td>
                 <td>{{ $post->title }}</td>
                 <td>{{ $post->about->about }}</td>
                 <td>{{ $post->content }}</td>
             </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
