@extends('layouts.appnavbarnew')
@section('title','galeria')

@section('content')

@section('css')

<link href="{{ env('APP_URL', '') }}/css/lightbox.css" rel="stylesheet"/>

@endsection

<section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <h2 style="margin-top: 50px">Galeria de Eventos</h2>
                        </div>
    
                    </div>
                </div>
                
        </div>
    </section>

<div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col">
                <div class="card-columns">
                    @foreach ($files as $file)
                                <div class="card">

                                    <a href="{{asset($file->url)}}" data-lightbox="roadtrip"><img src="{{asset($file->url)}}" style="border:inset; border-width:10px; border-color: #100B1E;"></a>
                                    {{-- <img class="card-img-top" src="{{asset($file->url)}}" alt=""> --}}
                                    <div class="card-footer">
                                        <p>{{$file->created_at}}</p>
                                    </div>
                            </div>  
                    @endforeach
                    </div>

                    {{$files->links()}}
                    <br>

                </div>
            </div>
        </div>


       @section('js')

<script src="{{ env('APP_URL', '') }}/js/lightbox.js"></script>

@endsection 

@endsection