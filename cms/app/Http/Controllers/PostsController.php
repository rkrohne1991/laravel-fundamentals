<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return "it is working " . $id;

        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return "I am the method that creates staff";
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
//        Post::create($request->all());
//        return redirect('/posts');
//        return redirect('/posts');

//        $input = $request->all();

//        return $input;
//        $input['title'] = $request->title;
//        $input['content'] = $request->title;
//        Post::create($request->all());
//
//        return $request->all();

//        $this->validate($request, [
//            'title'=>'required|max:5'
//        ]);

        $post = new Post;
        $post->user_id = 1;
        $post->title = $request->title;
        $post->content = $request->title;
        $post->save();

        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        return "this is the show method " . $id;
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }

    public function contact() {

        $people = ['Edwin', 'Jose', 'James', 'Peter', 'Maria'];

        return view('contact', compact('people'));
    }

    public function show_post($id, $var1, $var2) {
//        return view('post')->with('id', $id);
        return view('post', compact('id','var1', 'var2'));
    }
}
