<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = post::all();
        return view('posts.index', compact('posts'));
    }
    public function show_create(){
        return view('posts.show_create');

        }
    public function store(Request $request){
        $posts = post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->back();
    }
    public function edit(Request $request, $id){
        $posts = post::where('id', $id)->first();
        return view('posts.edit', compact('posts'));
    }
    public function update(Request $request, $id){
        $posts = post::where('id', $id)->first();
        $posts->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->back();
    }
    public function del($id){
        post::where('id', $id)->delete();
        return redirect()->back();

    }

    public function home(){
    {
        $user = User::where('id', 5)->first(); // تأكد من جلب المستخدم الصحيح
        return view('live', [
            'notifications' => $user->unreadNotifications,
        ]);
    }
}

}