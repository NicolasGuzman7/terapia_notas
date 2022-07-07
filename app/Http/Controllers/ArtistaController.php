<?php

namespace App\Http\Controllers;


use App\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

// public function __construct()
//     {
//         $this->middleware('admin');
//     }

    public function index()
    {

        $artistas= Artista::all();

        return view('artista.index', compact('artistas'));
    }
    
public function mostrar()
    {
        $artistas= Artista::all();

        return view('usuario.verartista', compact('artistas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        if($request->hasFile('imagenuno')) {
            $file = $request->file('imagenuno'); 
            $name2 = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name2);
        }
        if($request->hasFile('imagendos')) {
            $file = $request->file('imagendos');
            $name3 = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name3);
        }
        if($request->hasFile('imagentres')) {
            $file = $request->file('imagentres');
            $name4 = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name4);
        }

         $artista = new Artista();
         $artista->name = $request->input('name');
         $artista->slug = $request->input('slug');
         $artista->detail = $request->input('detail');
         $artista->instagram = $request->input('instagram');
         $artista->facebook = $request->input('facebook');
         $artista->telefono = $request->input('telefono');
         $artista->mail = $request->input('mail');
         $artista->spotify = $request->input('spotify');
         $artista->biografia = $request->input('biografia');
         $artista->imagenuno = $name2;
         $artista->imagendos = $name3;
         $artista->imagentres = $name4;
         $artista->avatar = $name;
         $artista->save();

         return redirect('artista');
         //return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //$artista = Artista::where('slug' , '=', $slug)->firstOrFail();
        //return view('artista.show', compact('artista'));
        $artista = Artista::where('slug','=',$request->slug)->firstOrFail();
        return view('artista.show',['artista'=>$artista]);
    }
    public function ver(Request $request)
    {
        //$artista = Artista::where('slug' , '=', $slug)->firstOrFail();
        //return view('artista.show', compact('artista'));
        $artista = Artista::where('slug','=',$request->slug)->firstOrFail();
        return view('artista.edit',['artista'=>$artista]);
    }

    public function formu(Request $request)
    {
        //$artista = Artista::where('slug' , '=', $slug)->firstOrFail();
        //return view('artista.show', compact('artista'));
        $artista = Artista::where('slug','=',$request->slug)->firstOrFail();
        return view('artista.editartistausu',['artista'=>$artista]);
    }

public function mostrarartista(Request $request)
    {
        //$artista = Artista::where('slug' , '=', $slug)->firstOrFail();
        //return view('artista.show', compact('artista'));
        $artista = Artista::where('slug','=',$request->slug)->firstOrFail();
        return view('usuario.vermasartista',['artista'=>$artista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $artista = Artista::where('slug','=',$request->slug)->firstOrFail();
        $artista->name = $request->name;
        $artista->detail = $request->detail;
        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $artista->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $artista->save();
        return redirect('artista');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editusu(Request $request)
    {
        $artista = Artista::where('slug','=',$request->slug)->firstOrFail();
        $artista->name = $request->name;
        $artista->detail = $request->detail;
        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $artista->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $artista->save();
        return redirect('artista');
    }


    public function update(Request $request,Artista $artista)
    {
          return $artista;
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
