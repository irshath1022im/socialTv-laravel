<?php

namespace App\Http\Controllers\Admin;

use App\Ads;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ads = Ads::get();
      return view('admin.ads',['ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('forms.createAds');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request->file());
        $request->validate([
            'image' =>'required',
            'adsFor' => 'required'
        ]);

        if($request->file()){
            // return $request->file('image');
            $file= $request->file('image');
            // return $file;
            $request->validate([
                'image' =>'mimes:png,jpg'
            ]);

            $path = Storage::disk('public')->putFileAs('ads', $file, $request->adsFor . '.' . $file->guessExtension());
            // dump($path);

            Ads::create(['adsFor' => $request->adsFor, 'imagePath' => $path]);

            return redirect()->route('adminAds.index')->with('status', 'Ads Created');
        }
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
        // return $id;
        $ads=Ads::findOrFail($id);
        $ads->delete();
        return redirect()->route('adminAds.index')->with('status', 'Ads Deleted');
    }
}
