<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Carteiras Técnicos de Saúde'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/layout.css')); ?>">

    <!-- IMPORTAÇÃO DOS ÍCONES DO GOOGLE -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>

    <!-- MENU COM SUBMENUS -->
   <nav class="navbar">
    <ul class="menu">

        <li>
            <a href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(asset('images/logo.jpg')); ?>" class="logo" alt="logo">
            </a>
        </li>

        <li><a href="<?php echo e(url('/')); ?>"><span class="material-icons">home</span> Início</a></li>
        
        <li class="has-submenu"><span class="material-icons">business</span> Institucional
            <ul class="submenu">
                <li><a href="#">Histórico</a></li>
                <li><a href="#">Missão e Visão</a></li>
                <li><a href="#">Estatuto</a></li>
            </ul>
        </li>
        <li class="has-submenu"><span class="material-icons">groups</span> Órgãos Sociais
            <ul class="submenu">
                <li><a href="#">Direção</a></li>
                <li><a href="#">Assembleia</a></li>
                <li><a href="#">Conselhos</a></li>
            </ul>
        </li>
        <li class="has-submenu"><span class="material-icons">person</span> A Profissão
            <ul class="submenu">
                <li><a href="#">Perfil Profissional</a></li>
                <li><a href="#">Áreas de Atuação</a></li>
            </ul>
        </li>
        <li class="has-submenu"><span class="material-icons">gavel</span> Regulamentos
            <ul class="submenu">
                <li><a href="#">Código Deontológico</a></li>
                <li><a href="#">Normas</a></li>
            </ul>
        </li>
        <li class="has-submenu"><span class="material-icons">medical_services</span> Informação Farmacêutica
            <ul class="submenu">
                <li><a href="#">Boletins</a></li>
                <li><a href="#">Estudos</a></li>
            </ul>
        </li>
    </ul>
    <a id="area_restrita" href="/login">Área Restrita</a>
</nav>


    <!-- CONTEÚDO PRINCIPAL -->
    <div class="main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
    <div class="footer-column">
        <h4><span class="material-icons">account_balance</span> OFA - CAPFA</h4>
        <p>Ordem dos Farmacêuticos de Angola<br>Comissão de Atribuição de Carteiras Profissionais</p>
    </div>
    <div class="footer-column">
        <h4><span class="material-icons">contact_phone</span> Contactos</h4>
        <p id="sinza">Em caso de dúvidas ou sugestões, <br>contate-nos</p>
        <br>
        <a id="link_footer" href="#">Endereço e Telefones</a>
    </div>
    <div class="footer-column">
        <h4><span class="material-icons">campaign</span> Comunicação</h4>
        <p id="sinza">Comunicados, discursos e eventos.</p>
        <a id="link_footer" href="#">Agenda da OFA </a><br>
        <a id="link_footer" href="#">Discursos</a> <br>
        <a id="link_footer" href="#">Eventos</a> <br>
        <a id="link_footer" href="#">Galeria de Imagens</a>
    </div>
    <div class="footer-column">
        <h4><span class="material-icons">share</span> Redes Sociais</h4>
        <p>Para facilitar o contato e disseminação das informações, a Ordem dos Farmacêuticos de Angola dispõe de algumas redes sociais:</p>
        <p id="sinza">Siga nossas redes sociais e mantenha-se informado(a).</p>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const items = document.querySelectorAll('.has-submenu');

        items.forEach(item => {
            item.addEventListener('click', function (e) {
                // Evita abrir todos ao mesmo tempo
                items.forEach(i => {
                    if (i !== item) i.classList.remove('active');
                });

                // Toggle da classe
                item.classList.toggle('active');
                e.stopPropagation();
            });
        });

        // Fecha submenu clicando fora
        document.body.addEventListener('click', function () {
            items.forEach(i => i.classList.remove('active'));
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        let index = 0;
        let interval = setInterval(nextSlide, 5000); // 5 segundos

        function showSlide(i) {
            slides.forEach((slide, idx) => {
                slide.classList.toggle('active', idx === i);
                dots[idx].classList.toggle('active', idx === i);
            });
            index = i;
        }

        function nextSlide() {
            index = (index + 1) % slides.length;
            showSlide(index);
        }

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                clearInterval(interval);
                showSlide(parseInt(dot.dataset.index));
                interval = setInterval(nextSlide, 5000); // reinicia intervalo
            });
        });
    });
</script>


</body>
</html>
<?php /**PATH C:\Users\Josemar Martins\Downloads\ofa\ofa\resources\views/layouts/app.blade.php ENDPATH**/ ?>