// Elementos do DOM
        const photoUpload = document.getElementById('photoUpload');
        const photoInput = document.getElementById('photoInput');
        const photoPreview = document.getElementById('photoPreview');
        const nextToPage2 = document.getElementById('nextToPage2');
        const backToPage1 = document.getElementById('backToPage1');
        const nextToPage3 = document.getElementById('nextToPage3');
        const backToPage2 = document.getElementById('backToPage2');
        const nextToPage4 = document.getElementById('nextToPage4');
        const backToPage3 = document.getElementById('backToPage3');
        const formPages = document.querySelectorAll('.form-page');
        const progressSteps = document.querySelectorAll('.progress-step');
        
        // Upload de foto
        photoUpload.addEventListener('click', () => {
            photoInput.click();
        });
        
        photoInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file && file.type.match('image.*')) {
                const reader = new FileReader();
                
                reader.onload = (e) => {
                    photoPreview.src = e.target.result;
                    photoPreview.style.display = 'block';
                    document.querySelector('.photo-icon').style.display = 'none';
                };
                
                reader.readAsDataURL(file);
            }
        });
        
        // Navegação entre páginas
        function goToPage(pageNumber) {
            // Esconde todas as páginas
            formPages.forEach(page => {
                page.classList.remove('active');
            });
            
            // Mostra a página atual
            document.getElementById(`page${pageNumber}`).classList.add('active');
            
            // Atualiza a barra de progresso
            progressSteps.forEach((step, index) => {
                if (index < pageNumber) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
        }
        
        // Event listeners para os botões de navegação
        nextToPage2.addEventListener('click', () => {
            // Validação simples antes de avançar
            if (document.getElementById('fullName').value === '') {
                alert('Por favor, preencha seu nome completo');
                return;
            }
            goToPage(2);
        });
        
        backToPage1.addEventListener('click', () => {
            goToPage(1);
        });
        
        nextToPage3.addEventListener('click', () => {
            goToPage(3);
        });
        
        backToPage2.addEventListener('click', () => {
            goToPage(2);
        });
        
        nextToPage4.addEventListener('click', () => {
            goToPage(4);
        });
        
        backToPage3.addEventListener('click', () => {
            goToPage(3);
        });
        
        // Máscaras para campos de formulário
        document.getElementById('cpf').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 3) {
                value = value.substring(0, 3) + '.' + value.substring(3);
            }
            if (value.length > 7) {
                value = value.substring(0, 7) + '.' + value.substring(7);
            }
            if (value.length > 11) {
                value = value.substring(0, 11) + '-' + value.substring(11);
            }
            
            e.target.value = value.substring(0, 14);
        });
        
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0) {
                value = '(' + value.substring(0, 2) + ') ' + value.substring(2);
            }
            if (value.length > 10) {
                value = value.substring(0, 10) + '-' + value.substring(10);
            }
            
            e.target.value = value.substring(0, 15);
        });