<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\File;

class GaleriaController extends Controller
{
    public function index(){

    	$files = File::paginate(20);

    	return view ('admin.galeriadmin', compact('files'));
    }

   public function mostrar(){

   	$files = File::paginate(20);

    	return view ('usuario.galeria', compact('files'));
   }
}
