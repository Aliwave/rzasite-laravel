<?php

namespace App\Http\Controllers\AdminPanel;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::distinct()->orderBy('year','asc')->get(['year']);
        foreach($galleries as $gallery){
            $gallery->count = Gallery::all()->where('year','==',$gallery->year)->count();
        }
        return view('adminpanel.gallerypage',[
            'galleries' => $galleries
        ]);
    }

    public function deleteYear($year){
        $images = Gallery::all()->where('year','==',$year);
        Storage::deleteDirectory('public/img/gallery/'.$year);
        foreach($images as $image){
            $image->delete();
        }
        return redirect()->route('adminGalleryPage')->with('success','Папка с фотографиями удалена.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeImage(Request $request)
    {
        $paths = [];
        $this->validate($request,[
            'images' => 'array',
            'images.*' => 'image|mimetypes:image/jpeg,image/png',
        ]);
        foreach($request->images as $imagefile) {
            $image = new Image();
            $year = $request->year;  
            $imageName = time() . '.' . $imagefile->getClientOriginalName();
            $image->year = $year;
            $image->imagename = $imageName;
            $image->imagepath = storage_path('app\img\gallery\\').$year.'\\'. $imageName;
            $imageFolder = 'public/img/gallery/'.$year;
            Storage::putFileAs($imageFolder,$imagefile,$imageName);
            $paths[] = $imageName;
            $image->save();
        }
        return back()
            ->with('success', 'Фотографии успешно загружены.')
            ->with('paths', $paths);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename',$filename)->delete();
        $path=public_path().'/storage/app/public/img'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}
