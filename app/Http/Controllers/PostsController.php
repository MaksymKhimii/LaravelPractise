<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(): string{
        return view('posts.create');
    }

    public function store(Request $request){
        /*$post = new Post();
        $post->user_id=1;
        $post->title=$request->title;
        $post->content = 'text';
        $post->updated_at = now();
        $post->created_at = now();
        $post->save();*/
        Post::create([
            'user_id' => 1,
            'title' => $request->title,
            'content' => 'test',
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        return redirect('/posts');
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
      /*  $post->title = $request->title;
        $post->save();*/
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy($id){
        Post::whereId($id)->delete();
        return redirect()->route('posts.index');
    }
}
