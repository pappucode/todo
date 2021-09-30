@extends('layout.layout')

@section('title', '| Edit Blog Post')

@section('content')

    <div class="row">

        <form action="{{ route('post.edit', $post->id) }}" method="POST">
            @csrf
            <div class="col-md-8">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" maxlength="255"
                           required>
                </div>
                <div class="form-group">
                    <label>Post Body</label>
                    <textarea name="body" class="form-control" style="height: 140px;"
                              required> {{ $post->body }} </textarea>
                </div>

            </div>
            <div class="col-md-4">
                <div class="well">

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
                            <a href="{!! route('post.show', $post->id) !!}" class="btn btn-danger btn-block">Cancel</a>
                        </div>

                        <div class="col-sm-6">
                            <button class="btn btn-success btn-block" type="submit"> Save Changes </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection