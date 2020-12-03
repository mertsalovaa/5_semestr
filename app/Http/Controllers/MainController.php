<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class MainController extends Controller
{

    public function Index(Request $request)
    {
//        $categories = Category::query()->get();
//        dd($categories);

        $posts = Post::query()->get();
        //dd($posts);

//        $posts = Post::query()->with('Category')->get();
//        $category = $posts[0]->Category;
//        dd($category->name);

        //$posts = Post::query()->with('Tags')->get();

        //foreach ($posts[0]->Tags as $tag) {
        //    echo $tag->name. '<br />';
        //}

        //dd($posts);
        return view('post.index', ['posts'=> $posts,
            'title'=> 'Список постів']);
    }
    public function Create(Request $request)
    {

        return view('post.create', ['title'=> 'Додати пост']);
    }

    public function List(Request $request)
    {
//        $categories = Category::query()->get();
//        dd($categories);
        $tag = new Tag();
        $tag->name="asdfadf";
        $tag->description= "555555";
        $tag->url= "7777";

        $tag->save();
        $posts = Post::query()->paginate(10);
        //dd($posts);

//        $posts = Post::query()->with('Category')->get();
//        $category = $posts[0]->Category;
//        dd($category->name);

        //$posts = Post::query()->with('Tags')->get();

        //foreach ($posts[0]->Tags as $tag) {
        //    echo $tag->name. '<br />';
        //}

        //dd($posts);
        return view('post.list', ['posts'=> $posts,
            'title'=> 'Список постів']);
    }
}
