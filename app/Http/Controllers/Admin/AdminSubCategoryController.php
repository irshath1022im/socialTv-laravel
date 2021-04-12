<?php

namespace App\Http\Controllers\Admin;

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
        $subCategory = SubCategory::with('category')->get();
        return view('admin.subCategory',['subCategory' => $subCategory]);
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
        $request->validate([
            'subCategory' => 'required|unique:sub_categories,subCategory',
            'thumbnail' => 'required',
            'categoryId' => 'required'
        ]);

        if($request->hasFile('thumbnail')){
            // dump($request->hasFile('thumbnail'));
            $file = $request->file('thumbnail');
            // $file->store('categoryThumbnails');
            $path = Storage::disk('public')->putFileAs('categoryThumbnails', $file, $request->category. '.'. $file->guessExtension() );

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


        return $request->all();
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
}
