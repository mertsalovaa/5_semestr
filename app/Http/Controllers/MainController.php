<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image;

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
        return view('post.index', [
            'posts' => $posts,
            'title' => 'Список постів'
        ]);
    }
    public function Create(Request $request)
    {
        $posts = Post::query()->paginate(10);
        $categories = Category::query()->get();
        // Post::query()->array_push($posts );
        return view('post.create', ['posts' => $posts, 'categories' => $categories, 'title' => 'Додати пост']);
    }

    public function GetAll()
    {
        $categories = Category::query()->get();
        return $categories;
    }

    public function List(Request $request)
    {
        //        $categories = Category::query()->get();
        //        dd($categories);
        $tag = new Tag();
        $tag->name = "asdfadf";
        $tag->description = "555555";
        $tag->url = "7777";

        $tag->save();
        $posts = Post::query()->get();
        $categories = Category::query()->get();
        //dd($posts);

        //        $posts = Post::query()->with('Category')->get();
        //        $category = $posts[0]->Category;
        //        dd($category->name);

        //$posts = Post::query()->with('Tags')->get();

        //foreach ($posts[0]->Tags as $tag) {
        //    echo $tag->name. '<br />';
        //}

        //dd($posts);
        return view('post.list', [
            'posts' => $posts, 'categories' => $categories,
            'title' => 'Список постів'
        ]);
    }

    public function Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'description_short' => 'required',
            'url' => 'required',
            'id_category' => 'required'
        ]);
        // dd($request);
        $url = '';
        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1024',
                ]);
                $extension = $request->image->extension();
                $name = sha1(microtime()) . "." . $extension;

                $bigImage = Image::make($request->image->getRealPath());
                $bigImage->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                    //->insert($watermark, 'bottom-right', 20, 20)
                    ->encode('jpg')
                    ->save(public_path("images/{$name}"), 70);
                // $url = Storage::url($name);
                $url = "/images/{$name}";
            }
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'description_short' => $request->description_short,
            'url' => $url,
            'id_category' => $request->id_category
        ]);

        return redirect()->route('post.list')
            ->with('success', 'Post created successfully.');
    }

    public function Details($id)
    {
        $post = Post::query()->with("Comments")->findOrFail($id);

        return view('post.details', [
            'post' => $post
        ]);
    }

    public function Edit($id)
    {
        $post = Post::query()->findOrFail($id);
        return view('post.edit', ['post' => $post, 'title' => 'Редагувати пост']);
    }

    public function StoreEdit(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'description_short' => 'required'
        ]);

        $index = 0;
        $post = Post::find($request->get('id'));
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->description_short = $request->get('description_short');
        
        $post->save();
        return redirect()->route('post.list')
            ->with('success', 'Post edited successfully.');
    }
}
