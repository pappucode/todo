<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        //create a variable and store all the blog posts in it from the database
        $posts = Post::orderby('id', 'desc')->paginate(5);
        //return a view and pass in the above variable
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        //validation
        $this->validate($request, [
            'title' => 'required | max:255',
            'body' => 'required'
        ]);

        //Data Insert
        $post        = new Post();
        $post->title = $request->title;
        $post->body  = $request->body;
        $post->save();
        //Session Message
        Session::flash('success', 'The Blog Post was successfully Saved!');

        //Return to Where
        return redirect()->route('post.show', $post->id);
    }

    public function show($id){

        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }


    public function edit($id){

        //find the post in the database and save as a var
        $post = Post::find($id);

        //return the view and pass in the var we previously created
        return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, $id){

        //validation
        $this->validate($request, [
            'title' => 'required | max:255',
            'body'  => 'required'
        ]);

        //data insert
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        //session message
        Session::flash('success','Post updated successfully !!');

        //return to where
        return redirect()->route('post.show', $post->id);
    }

    public function delete($id){
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'The post Has successfully Deleted!');

        return redirect()->route('posts.index');

    }


}
