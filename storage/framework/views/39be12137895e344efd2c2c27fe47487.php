

<?php $__env->startSection('title', 'Início'); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="carrossel-container">
        <div class="carrossel" id="carrossel">
            <img src="<?php echo e(asset('images/1.jpg')); ?>" class="slide active" alt="Imagem 1">
            <img src="<?php echo e(asset('images/2.jpg')); ?>" class="slide" alt="Imagem 2">
            <img src="<?php echo e(asset('images/3.jpg')); ?>" class="slide" alt="Imagem 3">
            <img src="<?php echo e(asset('images/4.jpg')); ?>" class="slide" alt="Imagem 4">
            <img src="<?php echo e(asset('images/5.jpg')); ?>" class="slide" alt="Imagem 5">
            <img src="<?php echo e(asset('images/6.jpg')); ?>" class="slide" alt="Imagem 6">
            <img src="<?php echo e(asset('images/7.jpg')); ?>" class="slide" alt="Imagem 7">
            <img src="<?php echo e(asset('images/8.jpg')); ?>" class="slide" alt="Imagem 8">
        </div>
        <div class="dots" id="dots">
            <?php for($i = 0; $i < 8; $i++): ?>
                <span class="dot <?php if($i === 0): ?> active <?php endif; ?>" data-index="<?php echo e($i); ?>"></span>
            <?php endfor; ?>
        </div>
    </div><br>

        <h1 id="servico"> SERVIÇOS </h1>

    <div class="cards-section">
    <div class="card">
        <span class="material-icons card-icon">info</span>
        <h3>Info</h3>
        
    </div>
    <div class="card">
        <span class="material-icons card-icon">assignment</span>
        <h3>Inscrição</h3>
    </div>
    <div class="card">
        <span class="material-icons card-icon">update</span>
        <h3>Actualização</h3>
    </div>
</div>
<br><br><br>
<h1 id="noticia"> NOTÍCIAS </h1>

    <div class="news-section">
    <div class="news-card">
        <div class="news-image">
            <img src="<?php echo e(asset('images/news1.jpg')); ?>" alt="Notícia 1">
        </div>
        <p class="news-description">
        Comissão Instaladora
        <br><br><br><br><br>
        <span class="material-icons clock-icon">schedule</span> <?php echo e(date('d/m/Y')); ?>

    </p>
    </div>

    <div class="news-card">
        <div class="news-image">
            <img src="<?php echo e(asset('images/news2.jpg')); ?>" alt="Notícia 2">
        </div>
        <p class="news-description">
        Comissão Instaladora
        <br><br><br><br><br>
        <span class="material-icons clock-icon">schedule</span> <?php echo e(date('d/m/Y')); ?>

    </p>
    </div>

    <div class="news-card">
        <div class="news-image">
            <img src="<?php echo e(asset('images/news1.jpg')); ?>" alt="Notícia 1">
        </div>
        <p class="news-description">
         Comissão Instaladora
            <br><br><br><br><br>
            <span class="material-icons clock-icon">schedule</span> <?php echo e(date('d/m/Y')); ?>

        </p>
    </div>

    <div class="yellow-section">
        <div class="yellow-content">
            <h2>Seção Amarela</h2>
            <p>Este é um conteúdo em destaque com fundo amarelo cobrindo toda a largura da tela.</p>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Mayombe Digital\OneDrive\Documents\projecto_tio_armando\ofa\resources\views/home.blade.php ENDPATH**/ ?>