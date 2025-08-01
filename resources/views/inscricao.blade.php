@extends('layouts.app')

@section('title', 'Inscricao')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/inscricao.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet" />


@endsection

@section('content')
   <div class="main-content">

    <h2><a href="/"><span class="material-symbols-outlined back-icon">arrow_back</span></a>INSCRIÇÃO</h2>

        <section></section><br><br><br><br><br><br><br>
    </div>

    <div class="h3">
        <h3>SELECIONAR A DIRECÇÃO</h3>
    </div>
    
    <div class="cards-section">

        <a href="formulario">
        <div class="card">
            <h3>LICENÇA</h3>
                   
        </div>
        </a>
        <a href="/formulario">
            <div class="card">
                <h3>CARTEIRA PROFISSIONAL</h3>
            </div>
        </a>
        
    </div>
    
    <div class="cards-section">

        <a href="formulario">
        <div class="card">
            <h3>DECLARAÇÃO</h3>
                   
        </div>
        </a>
        <a href="/formulario">
            <div class="card">
                <h3>CADASTRAR MEMBRO</h3>
            </div>
        </a>
    </div><br><br><br>

@endsection