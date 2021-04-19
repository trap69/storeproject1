<?php

namespace App\Http\Controllers;
use App\Models\Post;
use File;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index']]);
    }
    public function index(){
        $posts = Post::all();
        return view('blog.pages.home', compact('posts'));
    }
    public function addPost(){
        return view('blog.pages.addPost');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
            'category' => 'required',
            'img' => 'mimes:jpeg, jpg, png |required|max:10000'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/',"",$path);

        //dd(request()->all());
        Post::create([
            'title' => request ('title'),
            'content' => request ('content'),
            'category' => request ('category'),
            'path' => $filename

        ]);
        return redirect ('/');
    }

    public function delete(Post $post){
        $post->delete();

        return redirect('/');
    }
    public function update(Post $post){

        return view ('blog.pages.update-post',compact('post'));
    }

    public function storeUpdate(Post $post){
        if($request->file()){
            File::delete(storage_path('app/public'.$post->path));
            $path = $request->file('img')->store('public/images');
            $filename = str_replace('public/',"",$path);
            Post::where('id',$post->id)->update(['path'=>$filename]);
        }
        Post::where('id',$post->id)->update($request->only(['title','content']));

        return redirect('/');
    }
}
