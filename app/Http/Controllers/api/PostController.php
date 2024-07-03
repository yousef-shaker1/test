<?php

namespace App\Http\Controllers\api;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    use ApiRequestTrait;
    public function index()
    {
        $post =  PostResource::collection(Post::all());
        return $this->apiResponse($post, 'ok', 200);
    }
    public function show($id)
    {
        $post = Post::find($id);
        if (!$post){
            return $this->apiResponse(null, 'not found', 200);
        }
        return $this->apiResponse(new PostResource($post), 'ok', 200);
    }

    public function store(Request $request)
    {
        try{
            $validation = $request->validate([
                'title' => "required|min:2",
                'body' => "required|min:2",
            ]);
        }catch (ValidationExceotion $e){
            return $this->apiResponse(null, $e->errors(), 400);
        }
        $post = Post::create($request->all());
        if (!$post){
            return $this->apiResponse(null, 'not found', 200);
        }
        return $this->apiResponse(new PostResource($post), 'ok', 200);
    }

    public function update(Request $request, $id){
        try {
            $validation = $request->validate([
                'title' => 'required|min:3',
                'body' => 'required',
            ]);
        } catch (ValidationException $e) {
            return $this->apiResponse(null, $e->errors(), 400);
        }
        
        $post = Post::find($id);

        if(!$post){
            return $this->apiResponse(null, 'post not found', 400);
        }

        $post->update($request->all());
        return $this->apiResponse(new PostResource($post), 'post success', 200);

    
    }

    public function destroy($id){
        $post = Post::find($id);
        if(!$post){
            return $this->apiResponse(null, 'post not fount', 400);
        }
        $post->delete();
        if($post){
            return $this->apiResponse(null, 'post delete success', 400);
        }

    }
}