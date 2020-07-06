<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function createPost(Request $request){
        $rules = [
            'body' => 'required'
        ];

        $validator  = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with(['errors' => $validator->errors()]);
        }

        /** @var User $user */
        $user = auth()->user();

        $user->posts()->create($request->all());
        return redirect()->back()->with(['success' => 'post created successfully']);
    }

    public function posts(){
        return view('dashboard.post',[
            //fetch posts created by someone
            'posts' => Post::with('comments')->where('user_id','<>',auth()->id())->latest()->get()
        ]);
    }

    public function saveComment(Request $request, $id){
        $rules = [
            'body' => 'required'
        ];

        $validator  = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with(['errors' => $validator->errors()]);
        }

        /** @var Post $post */
        $post = Post::query()->find($id);

        $post->comments()->create([
            'body' => $request['body'],
            'user_id' => auth()->id()
        ]);
        return redirect()->back()->with(['success' => 'post created successfully']);
    }
}
