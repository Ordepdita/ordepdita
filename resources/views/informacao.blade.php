@extends('layouts.app')

@section('title', 'OFA-home')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
<link rel="stylesheet" href="{{ asset('css/informacao.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet" />
@endsection

@section('content')

<br><br><br><br><h1><a href="/"><span class="material-symbols-outlined back-icon">arrow_back</span></a>INFORMAÇÃO</h1>

        <section></section><br>


    <section id="card-info">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem est, suscipi</p>
        <article>
            <div class="card-requisitos">
                <h3 id="primeiro">Nacionais | ORDEPIDTA</h3>
                <ul>
                    <li>Lorem ipsum dolor tem.</li>
                    <li>voluptate quia facilquis aliq</li>
                    <li>is unde laudantium labore fugiat sequi qui </li>
                    <li>t amet consectetur adipisicing elit. Enim, l</li>
                    <li>ibero quis. Dolore, et rem quisqu</li>
                    <li>eaque uam. Aspernatur</li>
                    <li>siam dolorum, volupta</li>
                </ul>
            </div>
            <div class="card-requisitos">
                <h3 id="segundo">Nacionais | ORDEPIDTA</h3>
                <ul>
                    <li>Lorem ipsum dolor tem.</li>
                    <li>voluptate quia facilquis aliq</li>
                    <li>is unde laudantium labore fugiat sequi qui </li>
                    <li>t amet consectetur adipisicing elit. Enim, l</li>
                    <li>ibero quis. Dolore, et rem quisqu</li>
                    <li>eaque uam. Aspernatur</li>
                    <li>siam dolorum, volupta</li>
                </ul>
            </div>
        </article>
        <hr id="info-hr">
        <article >
            <div class="card-requisitos">
                <h3 id="primeiro">Estrangeiros | CAPORDEPDITA</h3>
                <ul>
                    <li>Lorem ipsum dolor tem.</li>
                    <li>voluptate quia facilquis aliq</li>
                    <li>is unde laudantium labore fugiat sequi qui </li>
                    <li>t amet consectetur adipisicing elit. Enim, l</li>
                    <li>ibero quis. Dolore, et rem quisqu</li>
                    <li>eaque uam. Aspernatur</li>
                    <li>siam dolorum, volupta</li>
                </ul>
            </div>
            <div class="card-requisitos">
                <h3 id="segundo">Estrangeiros | CAPORDEPDITA</h3>
                <ul>
                    <li>Lorem ipsum dolor tem.</li>
                    <li>voluptate quia facilquis aliq</li>
                    <li>is unde laudantium labore fugiat sequi qui </li>
                    <li>t amet consectetur adipisicing elit. Enim, l</li>
                    <li>ibero quis. Dolore, et rem quisqu</li>
                    <li>eaque uam. Aspernatur</li>
                    <li>siam dolorum, volupta</li>
                </ul>
            </div>
        </article>
    </section> 


@endsection