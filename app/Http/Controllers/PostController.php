<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index ()
    {
    	$post = Post::all();
    	
    	return view('post.index', compact('post'));
    }

    public function create ()
    {
    	$categories = Category::all();
    	return view('post.create', compact('categories'));
    }

    public function save ()
    {
    	Post::create([
    		'title' => request('title'),
    		'slug' => str_slug(request('title')),
    		'content' => request('content'),
    		'category_id' => request('category_id')
    	]);

    	return redirect()->route('post.index')->with('info', 'Berhasil menambahkan data baru');
    }

    public function show (Post $post)
    {

    	return view('post.show', compact('post'));
    }

    public function edit (Post $post)
    {
    	$categories = Category::all();

    	return view('post.edit', compact('post', 'categories'));
    }

    public function update (Post $post)
    {
    	$post->update([
    		'title' => request('title'),
    		'category_id' => request('category_id'),
    		'content' => request('content')
    	]);

    	return redirect()->route('post.index')->with('success', 'Data berhasil di update');
    }

    public function destroy (Post $post)
    {
    	$post->delete();

    	return redirect()->route('post.index')->withDanger('Data berhasil dihapus');
    }
}
