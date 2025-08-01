@extends('layouts.app')

@section('title', 'Inscricao')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/inscricao.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back" />
<style>
    /* Estilos adicionais para os inputs com ícones */
    .input-with-icon {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
    }
    
    .input-with-icon i {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #555;
    }
    
    .input-with-icon input {
        width: 100%;
        padding-left: 40px;
        box-sizing: border-box;
    }
</style>
@endsection

@section('content')
   <body>
    <main>
        <div id="login">
            <h1 id="sistema">ENTRAR</h1><br>
            
            <div class="input-with-icon">
                <i class="material-icons">person</i>
                <input type="email" name="iusuario" id="email" required>
            </div>
            
            <div class="input-with-icon">
                <i class="material-icons">lock</i>
                <input type="password" name="isenha" id="senha">
            </div><br>
            
            <input type="button" value="ENTRAR" id="entrar">
        </div>
        <div id="imagem">
            <img src="{{ asset('fotos/imagem.jpg') }}" class="slide active" alt="Imagem 1">
        </div>
    </main>
   </body>
@endsection