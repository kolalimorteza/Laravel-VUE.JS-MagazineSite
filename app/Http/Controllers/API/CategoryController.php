<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
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
        //return Category::latest()->paginate(10);
        if (\Gate::allows('isAdmin') || \Gate::allows('isAuthor')) {
            return Category::latest()->paginate(5);
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
            'cat_name' => 'required|string|max:191'
        ]);
        return Category::create([
            'cat_name' => $request['cat_name'],
        ]);
    }

    public function updateProfile(Request $request)
    {
        $category = auth('api')->category();
        $this->validate($request,[
            'cat_name' => 'required|string|max:191'.$category->id
        ]);
        $category->update($request->all());
        return ['message' => "Success"];
    }
    public function profile()
    {
        return auth('api')->category();
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
        $category = Category::findOrFail($id);
        $this->validate($request,[
            'cat_name' => 'required|string|max:191'.$category->id
        ]);
        $category->update($request->all());
        return ['message' => 'Updated the category info'];
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
        $category = Category::findOrFail($id);
        // delete the category
        $category->delete();
        return ['message' => 'Category Deleted'];
    }
    public function search(){
        if ($search = \Request::get('q')) {
            $Categorys = Category::where(function($query) use ($search){
                $query->where('cat_name','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $Categorys = Category::latest()->paginate(5);
        }
        return $Categorys;
    }
}
