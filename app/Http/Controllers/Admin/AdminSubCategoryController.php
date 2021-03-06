<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $result = SubCategory::with('category')->get();
        // $result = Category::with('subCategory')->get();
        // $result = Post::with('subCategory')->get()->pluck('title', 'subCategoryId');

    //    dump($result);
    //    return $result;
        return view('admin.subCategory',['subCategory' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoryList = Category::get();
        return view('forms.createSubCategory', ['categoryList' => $categoryList]);
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
        $request->validate([
            'subCategory' => 'required|unique:sub_categories,subCategory',
            'thumbnail' => 'required',
            'categoryId' => 'required'
        ]);

        if($request->hasFile('thumbnail')){
            // dump($request->hasFile('thumbnail'));
            $file = $request->file('thumbnail');
            // $file->store('categoryThumbnails');
            $path = Storage::disk('public')->putFileAs('categoryThumbnails', $file, $request->subCategory. '.'. $file->guessExtension() );

            // return $file->getClientOriginalExtension();
        }


            $newSubCategory = [
                'subCategory' => $request->subCategory,
                 'thumbnail' => $path,
                 'categoryId' => $request->categoryId
                ];
            SubCategory::create($newSubCategory);

            // return view('welcome')->with('status', 'Category Created ....');

            return redirect()->route('adminSubCategory.index')->with('status', 'SubCategory Created ....');


        // return $request->all();
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
        return SubCategory::with('getCategory')->findOrFail($id);
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
        $categoryList = Category::get();
        $subCategory = SubCategory::findOrFail($id);
        return view('forms.createSubCategory', ['categoryList' => $categoryList, 'subCategory' => $subCategory]);
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

        // return $request->all();

        $request->validate([
            'subCategory' => 'required',
            'thumbnail' => 'required',
            'categoryId' => 'required'
        ]);

        if($request->hasFile('thumbnail')){
            // dump($request->hasFile('thumbnail'));
            $file = $request->file('thumbnail');
            // $file->store('categoryThumbnails');
            $path = Storage::disk('public')->putFileAs('categoryThumbnails', $file, $request->subCategory. '.'. $file->guessExtension() );

            // return $file->getClientOriginalExtension();
        }


            $newSubCategory = [
                 'subCategory' => $request->subCategory,
                 'thumbnail' => $path,
                 'categoryId' => $request->categoryId
                ];
            SubCategory::where('id', $id)->update($newSubCategory);

            // return view('welcome')->with('status', 'Category Created ....');

            return redirect()->route('adminSubCategory.index')->with('status', 'SubCategory Updated ....');

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
        $result = SubCategory::where('id', $id)->delete();
        return redirect()->route('adminSubCategory.index')->with('status', 'SubCategory Deleted ....');
    }
}
