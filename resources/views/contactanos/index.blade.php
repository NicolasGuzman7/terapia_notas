@extends('layouts.appnavbarnew')

@section('title', 'Contactanos')

@section('content')
<section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <h2 style="margin-top: 50px">Quieres formar parte o patrocinarnos? Contactate con nosotros.</h2>
                        </div>
    
                    </div>
                </div>
                
        </div>
    </section>

 <style>
      html, body {
      min-height: 100%;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      background-color: #0a0119;
      }
      h1 {
      margin: 0 0 20px;
      font-weight: 400;
      color: #FFFFFF;
      
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #0a0119;
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #0a0119; 
      background: #0a0119; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      .fa-envelope {
      transform: rotate(-20deg);
      }
      .fa-at , .fa-mail-bulk{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #FFFFFF;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #D1104B; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;

      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }

      
    </style>




<div class="main-block" style="margin-bottom: 100px;">
      <div class="left-part">
      	<img src="images/grafoto5.png"

     width="600"
     height="480"

     style="margin-left: 50px;">
     
        
      </div>
      <form action="/contactanos/enviar" method="POST">
      	@csrf
        <h1>Contactanos</h1>
        <div class="info">
          <input type="text" name="name" placeholder="Nombre Completo">
          @error('name')
          	<p><strong>{{$message}}</strong></p>
          @enderror
          <input type="text" name="correo" placeholder="Correo Electronico">
          @error('correo')
          	<p><strong>{{$message}}</strong></p>
          @enderror
          <input type="text" name="telefono" placeholder="Numero Telefonico">
          @error('telefono')
          	<p><strong>{{$message}}</strong></p>
          @enderror
          <input type="text" name="asunto" placeholder="Asunto">
          @error('asunto')
          	<p><strong>{{$message}}</strong></p>
          @enderror
        </div>
        <p>Mensaje</p>
        <div>
          <textarea rows="4" name="mensaje"></textarea>
        </div>
        @error('mensaje')
          	<p><strong>{{$message}}</strong></p>
          @enderror
        <button type="submit">Enviar</button>
      </form>
    </div>

    @if(session('info'))
<script>
	
  alert("{{session('info')}}")

</script>

    @endif

@endsection	