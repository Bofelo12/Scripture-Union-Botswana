<?php

namespace App\Http\Controllers;

use App\ImageResize;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Pvtl\VoyagerBlog\BlogPost;
use App\Files;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadWelcome()
    {


        $numPosts = 3;
        $posts = BlogPost::where([
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())
            ->limit($numPosts)
            ->orderBy('created_at', 'desc')
            ->get();
        $user = new User();
        $dp = Files::all()->firstWhere('category','prayer_diary');
        $nl = Files::all()->firstWhere('category','newsletter');

        
        return view('welcome', compact('posts', 'user','dp','nl'));
    }

    public function index()
    {
        $numPosts = 3;
        $posts = BlogPost::where([
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())
            ->limit($numPosts)
            ->orderBy('created_at', 'desc')
            ->get();
        $user = new User();
        return view('blog.index', compact('posts', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // The post
        $post = BlogPost::where([
            ['slug', '=', $slug],
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())
         ->firstOrFail();

        // Related posts (based on tags)
        $relatedPosts = array();
        if (!empty(trim($post->tags))) {
            $tags = explode(',', $post->tags);
            $relatedPosts = BlogPost::where([
                    ['id', '!=', $post->id],
                ])->where(function ($query) use ($tags) {
                    foreach ($tags as $tag) {
                        $query->orWhere('tags', 'LIKE', '%'.trim($tag).'%');
                    }
                })->limit(4)
                ->orderBy('created_at', 'desc')
                ->get();
        }
        $user = new User();
        return view('blog.show', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
            'user'     => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
