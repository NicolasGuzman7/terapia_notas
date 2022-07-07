<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;

class NewsletterController extends Controller
{
    //

    public function store(Request $request){

    	if(! Newsletter::isSubscribed($request->email)){

    		Newsletter::subscribePending($request->email);

			return redirect('calendario')->with('success', 'Verifica tu correo para continuar');
			
    	}

    	return redirect('calendario')->with('failure', 'Ya estas suscrito');

    }
}
