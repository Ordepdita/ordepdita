@extends('layouts.app')

@section('title', 'OFA-home')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

    <div class="carrossel-container">
        <div class="carrossel" id="carrossel">
            <img src="{{ asset('fotos/licenca-image.jpg') }}" class="slide active" alt="Imagem 1">
            <img src="{{ asset('fotos/ordem-de-especialistas.jpg') }}" class="slide" alt="Imagem 2">
            <img src="{{ asset('fotos/carreiras-image.jpg') }}" class="slide" alt="Imagem 3">
            <img src="{{ asset('fotos/comissao-instaladora.jpg') }}" class="slide" alt="Imagem 4">
            {{-- <img src="{{ asset('fotos/imagem.jpg') }}" class="slide" alt="Imagem 5">
            <img src="{{ asset('fotos/imagem4.jpg') }}" class="slide" alt="Imagem 6">
            <img src="{{ asset('fotos/fisiot.jpg') }}" class="slide" alt="Imagem 7">
            <img src="{{ asset('fotos/practise.jpg') }}" class="slide" alt="Imagem 8"> --}}
        </div>
        <div class="dots" id="dots">
            @for($i = 0; $i < 8; $i++)
                <span class="dot @if($i === 0) active @endif" data-index="{{ $i }}"></span>
            @endfor
        </div>
    </div>

        <h1 id="servico"> SERVIÇOS </h1>

    <div class="cards-section">
    
         <a href="/informacao">
        <div class="card">
            <span class="material-icons card-icon">info</span>
            <h3>Info</h3>
                   
        </div>
        </a>
        <a href="/inscricao">
            <div class="card">
                <span class="material-icons card-icon">assignment</span>
                <h3>Inscrição</h3>
            </div>
        </a>
        <a href="#">
            <div class="card">
                <span class="material-icons card-icon">update</span>
                <h3>Actualização</h3>
            </div>
        </a>
    </div>
    <br><br><br>
    <h1 id="noticia"> NOTÍCIAS </h1>

    <div class="news-section">
        <div class="news-card">
            <div class="news-image">
                <img src="{{ asset('images/image-noticia.jpg') }}" alt="Notícia 1">
            </div>
            <p class="news-description">
                Comissão Instaladora
                <br><br><br><br><br>
                <span class="material-icons clock-icon">schedule</span> {{ date('d/m/Y') }}
            </p>
        </div>

        <div class="news-card">
            <div class="news-image">
                <img src="{{ asset('images/2.jpg') }}" alt="Notícia 2">
            </div>
            <p class="news-description">
                Comissão Instaladora
                <br><br><br><br><br>
                <span class="material-icons clock-icon">schedule</span> {{ date('d/m/Y') }}
            </p>
        </div>

        <div class="news-card">
            <div class="news-image">
                <img src="{{ asset('images/7.jpg') }}" alt="Notícia 1">
            </div>
            <p class="news-description">
                Comissão Instaladora
                <br><br><br><br><br>
                <span class="material-icons clock-icon">schedule</span> {{ date('d/m/Y') }}
            </p>
        </div>
    </div>

    <section id="amarela">
        <div id="image">
            <img src="{{ asset('fotos/imagem4.jpg') }}" alt="Notícia 1">
        </div>
        <div id="conteudo">    
            <h1>SOBRE NOSSA INSTITUIÇÃO</h1>
            <p>A Ordem dos Técnicos de Diagnóstico e Terapeutas (ORDEPDITA) é uma instituição nacional que regula, fiscaliza e valoriza o exercício profissional dos técnicos das áreas de diagnóstico e terapêutica em Angola. Representamos profissionais como técnicos de análises clínicas, fisioterapia, imagiologia, optometria, terapia da fala, entre outros, essenciais para a qualidade dos cuidados de saúde.</p>
            <p>Nosso objetivo é garantir que o exercício destas profissões ocorra com ética, competência e responsabilidade, promovendo a formação contínua, o reconhecimento legal e a emissão de carteiras profissionais. Atuamos em defesa da classe e da sociedade, assegurando um sistema de saúde mais justo e eficiente.<br><br>
            A ORDEPDITA é símbolo de união, confiança e compromisso com a excelência profissional e o bem-estar da população angolana</p>
        </div>
    </section>

    <section id="gps">
        
    </section>

@endsection