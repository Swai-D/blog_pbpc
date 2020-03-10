<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Image;



class PostController extends Controller
{
    
    public function index()
    {
        // User::all()->random();
    }

    
    public function create()
    {
        return view('admin.admin_create_post');
    }

    
    public function store()
    {
        $data = Post::create($this->validatePost());
        dd($data);
        return redirect('/', compact('data'));
    }

   
    public function show(Post $post)
    {
        //
    }

    
    public function edit(Post $post)
    {
        return view('admin.admin_edit_post');
    }

    
    public function update(Request $request, Post $post)
    {
        //
    }

    
    public function destroy(Post $post)
    {
        //
    }

    public function likes(Post $post)
    {
     
      dd(Auth::user()->name);

    }

    private function validatePost()
    {
        return request()->validate([
            'title' => ['required','string','max:255'],
            'caption' => ['required','string','max:255'],
            'author' => ['required','string','max:255'],
            'content' => ['required','string','max:255'],
            'post_position' => ['required','string','max:255'],
            'post_position_number' => ['required','string','max:255'],
            'likes' => '',
            'comments' => '',      
            
        ]);

    }

}
