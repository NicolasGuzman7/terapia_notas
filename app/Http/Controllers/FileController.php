<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.files.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view ('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        // $imagenes = $request->file('file')->store('public/imagenes');
        // $url = Storage::url($imagenes);
        // return redirect()->route('admin.files.index');
        
            $request->validate([
            'file' => 'required|image'
                ]);

        $nombre = Str::random(10) . $request->file('file')->GetClientOriginalName();
        $ruta = storage_path() . '\app\public\imagenes/' . $nombre;
        

    Image::make($request->file('file'))
        ->resize(1200, null, function ($constraint) {
        $constraint->aspectRatio();
})
        ->save($ruta);

        File::create([
            'url' => '/storage/imagenes/' . $nombre
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($file)
    {
       return view ('admin.files.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($file)
    {
        return view ('admin.files.edit');
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
    public function destroy(File $file)
    {

        $url = str_replace('storage', 'public', $file->url);
        Storage::delete($url);

        $file->delete();

        return redirect('galeriadmin')->with('eliminar', 'ok');
            
    }
}
