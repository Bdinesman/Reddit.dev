<?php

namespace App\Http\Controllers;
use \App\Post;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $posts=Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $currentUser=$request->user();
        if(!isset($currentUser)){
            return redirect('auth/login');
        }
        return view('posts_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentUser=$request->user();
        if(!isset($currentUser)){
            return redirect('auth/login');
        }
        $rules=array(
            'title'=>'required|min:6|max:25',
            'url'=>'max:200|url',
            'content'=>'max:2000|',
            'subreddit'=>'required|alpha|');
        $this->validate($request,$rules);
        $post=new \App\Post;
        $post->title=$request->get('title');
        $post->url=$request->get('url');
        $post->content=$request->get('content');
        $post->subreddit_id=$request->get('subreddit');
        $post->created_by=$request->user()->id;
        $post->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Card::find($id);
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
