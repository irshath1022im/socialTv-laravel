<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::get();
        return view('admin.category', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('forms.createCategory');
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
        // dd($request);
        $validated = $request->validate([
            'category' => 'required|unique:categories,category',
            'thumbnail' => 'required|mimes:png,jpeg'
        ]);

        if($request->hasFile('thumbnail')){
            // dump($request->hasFile('thumbnail'));
            $file = $request->file('thumbnail');
            // $file->store('categoryThumbnails');
            $path = Storage::disk('public')->putFileAs('categoryThumbnails', $file, $request->category. '.'. $file->guessExtension() );

            // return $file->getClientOriginalExtension();
        }


            $newCategory = ['category' => $request->category, 'thumbnail' => $path];
            Category::create($newCategory);

            // return view('welcome')->with('status', 'Category Created ....');
            return redirect()->route('adminCategory.index')->with('status', 'Category Created ....');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoryName)
    {
        //
        $from = date('2021-01-02');
        $to = date('2021-03-02');

        $news =Category::with(['posts' => function($query){
            return $query->where('created_at', '>', date('2021-03-01'));
        }])->where('category', '=', $categoryName)->get();

        $topNews = Category::with(['posts' => function($query) use($from,$to)
        {
            return $query->whereBetween('created_at', [$from, $to]);
        }])
        ->where('category', '=', $categoryName)->get();

        return view('category', ['result' => $news, 'topNews' => $topNews]);
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
        $category = Category::findOrFail($id);
        return view ('forms.createCategory', ['category' => $category]);
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
            'category' => 'required',
            'thumbnail' => 'required|mimes:png,jpeg'
        ]);

        if($request->hasFile('thumbnail')){
            // dump($request->hasFile('thumbnail'));
            $file = $request->file('thumbnail');
            // $file->store('categoryThumbnails');
            $path = Storage::disk('public')->putFileAs('categoryThumbnails', $file, $request->category. '.'. $file->guessExtension() );

            // return $file->getClientOriginalExtension();
        }


        $updatedCategory = ['category' => $request->category, 'thumbnail' => $path];
        Category::where('id', $id)->update($updatedCategory);

        // return view('admin.category')->with('updated', 'Category Updated ....');
        return redirect()->route('adminCategory.index')->with('status', 'Category Updated ....');
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
       Category::where('id', $id)->delete();

    //    return view('admin.category')->with('deleted', 'Successfully Deleted');
       return redirect()->route('adminCategory.index')->with('status', 'Successfully Deleted');
    }
}
