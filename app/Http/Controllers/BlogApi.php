<?php

namespace App\Http\Controllers;
use App\Http\Resources\BlogList;
use App\Models\Post;
use App\Http\Controllers\StoreController;
use Illuminate\Http\Request;

class BlogApi extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index','show']);
    }
    public function index(){

        return BlogList::collection(Post::with('comments')->paginate(3));
    }

}
