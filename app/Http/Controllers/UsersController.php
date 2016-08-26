<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        //$this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->user()){
            return view('dashboard');
        }
        $rules=array('username'=>'required|max:20|min:5|unique:users,username',
            'password'=>'required|max:30|min:6|',
            'retype_password'=>'required|same:password',
            'email'=>'required|max:50|min:5|email');
        $this->validate($request,$rules);
        $user=new \App\User();
        $user->username=$request->username;
        $user->password=bcrypt($request->password);
        $user->email=$request->email;
        $user->save();
        return view('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function dashboard(Request $request){
    $posts=Post::all();
    if($request->user()){
        $user=$request->user();
        $data=['user'=>$user,'posts'=>$posts];
    }
        $data=['posts'=>$posts];
    return view('dashboard')->with('data',$data);    }
}