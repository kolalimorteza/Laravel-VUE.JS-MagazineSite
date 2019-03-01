<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Post::latest()->paginate(10);
        if (\Gate::allows('isAdmin') || \Gate::allows('isAuthor')) {
            return Post::latest()->paginate(5);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:191',
            'description' => 'required|string'
        ]);
        return Post::create([
            'cat_id' => $request['cat_id'],
            'user_id' => $request['user_id'],
            'title' => $request['title'],
            'description' => $request['description'],
            'photo' => $request['photo']
        ]);
    }

    public function updateProfile(Request $request)
    {
        $post = auth('api')->post();
        
        $currentPhoto = $post->photo;
        if($request->photo != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/profile/').$name);
            $request->merge(['photo' => $name]);
            $postPhoto = public_path('img/profile/').$currentPhoto;
            if(file_exists($postPhoto)){
                @unlink($postPhoto);
            }
        }
        $post->update($request->all());
        return ['message' => "Success"];
    }
    public function blogpost()
    {
        return auth('api')->post();
    }
    public function blogpostSingle($id)
    {
        $post = Post::findOrFail($id);
        return $post;
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $this->validate($request,[
            'title' => 'required|string|max:191'
        ]);
        $post->update($request->all());
        return ['message' => 'Updated the Post info'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin');
        $post = Post::findOrFail($id);
        // delete the Post
        $post->delete();
        return ['message' => 'Post Deleted'];
    }
    public function search(){
        if ($search = \Request::get('q')) {
            $Posts = Post::where(function($query) use ($search){
                $query->where('title','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $Posts = Post::latest()->paginate(5);
        }
        return $Posts;
    }
}
