<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        // $comments = Comments::all();
        return view('welcome', compact('posts', 'categories'));
    }

    

    public function show(Post $post)
    {
        // $annonce = Annonce::find($id);
        return view('PostsDeatails', compact('post'));
    }

    public function store(Request $request)
    {
        
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
