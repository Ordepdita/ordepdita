@extends('layouts.app')

@section('title', 'Formulario')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
<link rel="stylesheet" href="{{ asset('css/formulario2.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet" />
@endsection

@section('content')

<br><br><br><br><h1><a href="/formulario2"><span class="material-symbols-outlined back-icon">arrow_back</span></a>INSCRIÇÃO</h1>

        <section></section><br>

    <div class="container">

        <h2>DADOS ACADÉMICOS</h2>

        <label class="checkbox-container">
            <input type="checkbox" id="medioCheckbox" onchange="mostrarFormulario('medioCheckbox', 'formularioMedio')">
            <span class="checkmark">
                <span class="material-icons">check</span>
            </span>
            <p>ENSINO MÉDIO</p>
        </label>

        <div id="formularioMedio" style="display: none;">
            
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="Provincia" placeholder="Província*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="Provincia" placeholder="Província*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>
            </form>
        </div>

        <label class="checkbox-container">
            <input type="checkbox" id="estudaCheckbox" onchange="mostrarFormulario('estudaCheckbox', 'formularioEstudo')">
            <span class="checkmark">
                <span class="material-icons">check</span>
            </span>
            <p>LICENCIATURA</p>
        </label>

        <div id="formularioEstudo" style="display: none;">
            
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="Provincia" placeholder="Província*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="Provincia" placeholder="Província*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>
            </form>
        </div>

        <label class="checkbox-container">
            <input type="checkbox" id="estagioCheckbox" onchange="mostrarFormulario('estagioCheckbox', 'formularioEstagio')">
            <span class="checkmark">
                <span class="material-icons">check</span>
            </span>
            <p>MESTRADO</p>
        </label>


        <div id="formularioEstagio" style="display: none;">
            <form>
            <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="Provincia" placeholder="Província*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="Provincia" placeholder="Província*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>

            </form>
        </div>



        <label class="checkbox-container">
            <input type="checkbox" id="dotoramentoCheckbox" onchange="mostrarFormulario('dotoramentoCheckbox', 'formularioDotoramento')">
            <span class="checkmark">
                <span class="material-icons">check</span>
            </span>
            <p>DOTORAMENTO</p>
        </label>


        <div id="formularioDotoramento" style="display: none;">
            <form>
            <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="Provincia" placeholder="Província*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="Provincia" placeholder="Província*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>

            </form>
        </div>



        <div class="navigation">
            <button id="btnVoltar" class="btn btn-back">VOLTAR</button>
            <button id="btnSeguinte" class="btn btn-next">SEGUINTE</button>
        </div>

    </div>

<script>
    function mostrarFormulario(checkboxId, formId) {
        const checkbox = document.getElementById(checkboxId);
        const form = document.getElementById(formId);
        form.style.display = checkbox.checked ? "block" : "none";
    }

    // Ações dos botões VOLTAR e SEGUINTE
    document.getElementById('btnVoltar').addEventListener('click', () => {
        window.location.href = "{{ url('/formulario2') }}";
    });

    document.getElementById('btnSeguinte').addEventListener('click', () => {
        window.location.href = "{{ url('/formulario4') }}";
    });
</script>

@endsection
