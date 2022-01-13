<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;



class PostController extends Controller
{
    public function index()
    {

        //agar bisa menambahan di all post nya misal = all post in web design
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            //"posts" => Post::all()

            //with agar menghindari kesalahan n+1, yaitu biar hemat query database
            //"posts" => Post::with(['author', 'category'])->latest()->get()         //yang paling akhir di masukin akan berada di atas

            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7) //with nya udah dimasukin lewat model
        ]);
    }

    // public function show($slug)
    // {
    //     return view('post', [
    //         "title" => "single Post",
    //         "post" => Post::find($slug)
    //     ]);
    // }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
