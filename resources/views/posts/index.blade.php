@extends('layout.layout')

@section('title','| All Posts')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{route('post.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New
                Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created AT</th>
                    <th></th>
                </thead>

                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? '...' : '' }}</td>
                    <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                    <td>
                        <a href="{{ route('post.show',$post->id) }}" class="btn btn-default btn-sm">view</a>
                        <a href="{{ route('post.edit',$post->id) }}" class="btn btn-default btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <div class="text-center">
                {!! $posts->links(); !!}
            </div>

        </div>
    </div>

@endsection