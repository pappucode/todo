@extends('layout.layout')

@section('title', '| Create New Post')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        <hr>
        <form action="{{ route('post.create') }}" method="POST" data-parsley-validate>
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" maxlength="255" required>
            </div>
            <div class="form-group">
                <label>Post Body</label>
                <textarea name="body" class="form-control" style="height: 140px;" required> </textarea>
            </div>

            <button class="btn btn-lg btn-block btn-success" type="submit"><i
                        class="fa fa-save submit_icon"></i> Create Post
            </button>

        </form>
    </div>
</div>

@endsection

@section('scripts')
    <script src="{{ asset('js/parsley.min.js') }}"></script>
@endsection