<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::with('subCategory')->orderByDesc('created_at')->paginate(10);
        // dump($posts);
        return view('admin.post',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subCategory = SubCategory::get();
        return view('forms.createPost', ['subCategory' => $subCategory]);
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

        // return $request->all();

        $validated = $request->validate([
            'title' => 'required|min:10|not_regex:/(^([a-zA-z]+)(\d+)?$)/u',
            'content' => 'required',
            'postType' => 'required',
            'subCategoryId' => 'required',
            'thumbnail' => 'required|mimes:png,jpg'
        ]);

        if($request->file('thumbnail')){

            $file =  $request->file('thumbnail');
            $path = Storage::disk('public')->putFile('postThumbnail', $file);
        }

        $newPost = [
            'title' => $validated['title'],
            'content' => $validated['content'],
            'postType' => $validated['postType'],
            'subCategoryId' =>$validated['subCategoryId'],
            'thumbnail' => $path
        ];

        // dump($validated);
        $result =Post::create($newPost);
        return redirect()->route('adminPost.show',['adminPost' => $result->id ])->with('status', 'New Post Created');
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
        $post= Post::findOrFail($id);
        $subCategory = SubCategory::get();
        return view('forms.createPost', ['post' => $post, 'subCategory' => $subCategory]);
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
        $validated = $request->validate([
            'title' => 'required|min:10|not_regex:/(^([a-zA-z]+)(\d+)?$)/u',
            'content' => 'required',
            'postType' => 'required',
            'subCategoryId' => 'required',
        ]);

        $updatedPost = '';

        if($request->file('thumbnail')){

            $file =  $request->file('thumbnail');
            $path = Storage::disk('public')->putFile('postThumbnail', $file);
            $updatedPost = [
                'title' => $validated['title'],
                'content' => $validated['content'],
                'postType' => $validated['postType'],
                'subCategoryId' =>$validated['subCategoryId'],
                'thumbnail' => $path
            ];
        }else {
            $updatedPost = [
                'title' => $validated['title'],
                'content' => $validated['content'],
                'postType' => $validated['postType'],
                'subCategoryId' =>$validated['subCategoryId'],
            ];
        }

        // dump($updatedPost);
         Post::where('id', $id)->update($updatedPost);
         return redirect()->route('adminPost.index')->with('status', 'Post Updated Successfully');

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
        Post::where('id', $id)->delete($id);
        return redirect()->route('adminPost.index')->with('status', 'Post Deleted Successfully');
    }
}
