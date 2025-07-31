

<?php $__env->startSection('title', 'Formulario'); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/formulario.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/formulario2.css')); ?>">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>
        <br><br><br><br><h1><a href="/formulario"><span class="material-symbols-outlined back-icon">arrow_back</span></a>INSCRIÇÃO</h1>

        <section></section><br>

    <div class="container">
        
        <br><br><div class="progress-bar">
            <div class="progress-step">
                <div class="step-number">1</div>
                <div class="step-label">Dados Pessoais</div>
            </div>
            <div class="progress-step active">
                <div class="step-number">2</div>
                <div class="step-label">Dados Institucional</div>
            </div>
            <div class="progress-step">
                <div class="step-number">3</div>
                <div class="step-label">Dados Acadêmicos</div>
            </div>
            <div class="progress-step">
                <div class="step-number">4</div>
                <div class="step-label">Anexar Documentos</div>
            </div>
            <div class="progress-step">
                <div class="step-number">5</div>
                <div class="step-label">Pagamento</div>
            </div>
        </div>
        
        <section class="progress"></section><br>




        <div class="verificar">
            <h1>Trabalha?</h1>
            <label class="checkbox-container">
                <input type="checkbox" id="trabalhaCheckbox" onchange="mostrarFormulario()">
                <span class="checkmark">
                    <span class="material-icons">check</span>
                </span>
                <p>Sim, eu trabalho</p>
            </label>
        </div>
        <div id="formularioTrabalho" style="display: none;">

            <h1>Dados Institucionais</h1>

            <form>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Local de trabalho*" required>
                    </div>
                    <div class="form-group">
                       <select id="estado-civil" required>
                        <option value="">Província*</option>
                        <option value="Bengo">Bengo</option>
                        <option value="Benguela">Benguela</option>
                        <option value="Bié">Bié</option>
                        <option value="Cabinda">Cabinda</option>
                        <option value="Cuanza Sul">Cuanza Sul</option>
                        <option value="Cuanza Norte">Cuanza Norte</option>
                        <option value="Cuando">Cuando</option>
                        <option value="Cubango">Cubango</option>
                        <option value="Cunene">Cunene</option>
                        <option value="Icolo e Bengo">Icolo e Bengo</option>
                        <option value="Huíge">Huíge</option>
                        <option value="Huambo">Huambo</option>
                        <option value="Huíla">Huíla</option>
                        <option value="Luanda">Luanda</option>
                        <option value="Lunda Norte">Lunda Norte</option>
                        <option value="Lunda Sul">Lunda Sul</option>
                        <option value="Malanje">Malanje</option>
                        <option value="Moxico">Moxico</option>
                        <option value="Moxico Leste">Moxico Leste</option>
                        <option value="Namibe">Namibe</option>
                        <option value="Zaíre">Zaíre</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Municipio" placeholder="Município*" required>
                    </div>                    
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Endereço da instituição*" required>
                    </div>

                     <div class="form-group">
                        <select id="genero" required>
                            <option value="">Sector*</option>
                            <option value="masculino">Público</option>
                            <option value="feminino">Privado</option>
                            <option value="masculino">Público-Privado</option>
                        </select>
                    </div>  

                        <div class="form-group">
                        <input type="text" id="nascimento" placeholder="Telefone*" required>
                        </div>                                     
                </div>

                <div class="form-row">
                        <div class="form-group-fim">
                            <input type="text" id="nome" placeholder="E-mail*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="Cargo" placeholder="Cargo*" required>
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
    // Mostrar formulário institucional se o checkbox estiver marcado
    function mostrarFormulario() {
        const checkbox = document.getElementById("trabalhaCheckbox");
        const form = document.getElementById("formularioTrabalho");
        form.style.display = checkbox.checked ? "block" : "none";
    }

    // Ações dos botões VOLTAR e SEGUINTE
    document.getElementById('btnVoltar').addEventListener('click', () => {
        window.location.href = "<?php echo e(url('/formulario')); ?>";
    });

    document.getElementById('btnSeguinte').addEventListener('click', () => {
        window.location.href = "<?php echo e(url('/formulario3')); ?>";
    });

    </script>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Mayombe Digital\OneDrive\Documents\estudos\projecto_tio_armando\ofa\resources\views/formulario2.blade.php ENDPATH**/ ?>