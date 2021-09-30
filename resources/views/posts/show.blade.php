@extends('layout.layout')

@section('title', '| Show post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                {{--<dl class="dl-horizontal">
                    <label>Url:</label>
                    <p><a href=""></a></p>
                </dl>--}}

                <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Updated At:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr/>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{!! route('post.edit', $post->id) !!}" class="btn btn-primary btn-block">Edit</a>
                    </div>

                    <div class="col-sm-6">
                        <form action="{{ route('post.delete', $post->id) }}" method="get">
                            @csrf
                            <button class="btn btn-danger btn-block" type="submit">Delete</button>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a href="{!! route('posts.index') !!}" class="btn btn-default btn-block btn-h1-spacing"><< See All Posts</a>s
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection