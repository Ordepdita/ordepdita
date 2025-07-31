@extends('layouts.app')

@section('title', 'Formulario')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet" />
@endsection

@section('content')

<body>
        <br><br><br><br><h1><a href="/inscricao"><span class="material-symbols-outlined back-icon">arrow_back</span></a>INSCRIÇÃO</h1>

        <section></section><br>

    <div class="container">
        
        <br><br><div class="progress-bar">
            <div class="progress-step active">
                <div class="step-number">1</div>
                <div class="step-label">Dados Pessoais</div>
            </div>
            <div class="progress-step">
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

        <form id="registrationForm">
            <!-- Página 1: Dados Pessoais -->
            <div class="form-page active" id="page1">
                <h2>Dados Pessoais</h2>
                
                <div class="photo-upload" id="photoUpload">
                    <div class="photo-placeholder">
                        <img id="photoPreview" src="fotos/1.jpg" alt="foto meio corpo">
                    </div>
                    <p>Clique para adicionar uma foto meio corpo</p>
                    <input type="file" id="photoInput" accept="image/*" style="display: none;">
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nome" placeholder="Nome completo*" required>
                    </div>
                    <div class="form-group">
                        <input type="date" id="nascimento" placeholder="Data de Nascimento*" required>
                    </div>

                    <div class="form-group">
                        <select id="genero" required>
                            <option value="">Gênero*</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>                    
                </div>
            
            <div class="form-row">
                <div class="form-group">
                        <input type="text" id="bi" placeholder="Nº de B.I ou Passaporte*" required>
                </div>

                <div class="form-group">
                    <input type="date" id="emissaoBI" placeholder="Data de Emissão do BI*" required>
                </div>

                <div class="form-group">
                    <input type="date" id="validadeBI" placeholder="Data de Validade do BI*" required>
                </div>    
                
                
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <select id="perfil" required>
                            <option value="">Perfil*</option>
                            <option value="Estágiario(a)">Estágiario(a)</option>
                            <option value="Tecnico de análises clenicas e saude publica">Técnico de análises clínicas e saúde pública</option>
                            <option value="Tecnico de farmácia">Técnico de farmácia</option>
                            <option value="Fisioterapeuta">Fisioterapeuta</option>
                            <option value="Estomatologia">Estomatologia</option>
                            <option value="Radiologia">Radiologia</option>
                            <option value="Tecnico de anatomia patologica">Técnico de anatomia patológica</option>
                            <option value="Citologia e tanatológia">Citologia e tanatológia</option>
                            <option value="Tecnico de audiologia">Técnico de audiologia</option>
                            <option value="Tecnico de cardiopneumologia">Técnico de cardiopneumologia</option>
                            <option value="Dietista">Dietista</option>
                            <option value="Higiene oral">Higiene oral</option>
                            <option value="Tecnico de medicina nuclear">Técnico de medicina nuclear</option>
                            <option value="Tecnico de Neurofisiologia">Técnico de Neurofisiologia</option>
                            <option value="Ortoptista/Oftalmologia">Ortoptista / Oftalmologia</option>
                            <option value="Ortoprotesia">Ortoprotésia</option>
                            <option value="Tecnico de protese dentaria ou Ondotologia">Técnico de prótese dentária ou Ondotologia</option>
                            <option value="Tecnico de radioterapia">Técnico de radioterapia</option>
                            <option value="Terapeuta da fala">Terapeuta da fala</option>
                            <option value="Terapeuta ocupacional">Terapeuta ocupacional</option>
                            <option value="Tecnico de saude ambiental">Técnico de saúde ambiental</option>
                            <option value="Biologia laboratorial">Biologia laboratorial</option>
                            <option value="Defectologia">Defectologia</option>
                            <option value="Electromedicina">Electromedicina</option>
                            <option value="Estatistica medica">Estatística medica</option>
                            <option value="Higiene e epidemiologia">Higiene e epidemiologia</option>
                            <option value="Genetica">Genetica</option>
                            <option value="Psicologia clinica">Psicologia clínica</option>
                            <option value="Patologica">Patológica</option>
                        </select>
                </div>

                <div class="form-group">
                    <input type="text" id="pai" placeholder="Nome do Pai*" required>
                </div>
                <div class="form-group">
                    <input type="text" id="mae" placeholder="Nome da Mãe*" required>
                </div>

            </div>
            
            <div class="form-row">
                
                <div class="form-group">
                    <select id="estadoCivil" required>
                        <option value="">Estado civil*</option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <select id="nacionalidade" required>
                        <option value="">Nacionalidade*</option>
                        <option value="África do Sul">África do Sul</option>
                        <option value="Angola">Angola</option>
                        <option value="Argélia">Argélia</option>
                        <option value="Benim">Benim</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Camarões">Camarões</option>
                        <option value="Chade">Chade</option>
                        <option value="Comores">Comores</option>
                        <option value="Congo">Congo</option>
                        <option value="Costa do Marfim">Costa do Marfim</option>
                        <option value="Djibuti">Djibuti</option>
                        <option value="Egito">Egito</option>
                        <option value="Eritreia">Eritreia</option>
                        <option value="Eswatini">Eswatini</option>
                        <option value="Etiópia">Etiópia</option>
                        <option value="Gabão">Gabão</option>
                        <option value="Gâmbia">Gâmbia</option>
                        <option value="Gana">Gana</option>
                        <option value="Guiné">Guiné</option>
                        <option value="Guiné-Bissau">Guiné-Bissau</option>
                        <option value="Guiné Equatorial">Guiné Equatorial</option>
                        <option value="Lesoto">Lesoto</option>
                        <option value="Libéria">Libéria</option>
                        <option value="Líbia">Líbia</option>
                        <option value="Madagáscar">Madagáscar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Mali">Mali</option>
                        <option value="Marrocos">Marrocos</option>
                        <option value="Maurícia">Maurícia</option>
                        <option value="Mauritânia">Mauritânia</option>
                        <option value="Moçambique">Moçambique</option>
                        <option value="Namíbia">Namíbia</option>
                        <option value="Níger">Níger</option>
                        <option value="Nigéria">Nigéria</option>
                        <option value="Quénia">Quénia</option>
                        <option value="República Centro-Africana">República Centro-Africana</option>
                        <option value="República Democrática do Congo">República Democrática do Congo</option>
                        <option value="Ruanda">Ruanda</option>
                        <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serra Leoa">Serra Leoa</option>
                        <option value="Seicheles">Seicheles</option>
                        <option value="Somália">Somália</option>
                        <option value="Sudão">Sudão</option>
                        <option value="Sudão do Sul">Sudão do Sul</option>
                        <option value="Tanzânia">Tanzânia</option>
                        <option value="Togo">Togo</option>
                        <option value="Tunísia">Tunísia</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Zâmbia">Zâmbia</option>
                        <option value="Zimbábue">Zimbábue</option>
                    </select>

                </div>
                <div class="form-group">
                    <input type="text" id="naturalidade" placeholder="Naturalidade*" required>
                </div>
            </div>
        </div>
        
        <div class="form-section">
            <div class="section-title">ENDEREÇO ACTUAL</div>
            
            <div class="form-row">
                <div class="form-group">
                    <select id="provincia" required>
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
                    <input type="text" id="municipio" placeholder="Município*" required>
                </div>

                <div class="form-group">
                    <input type="text" id="bairro" placeholder="Bairro*" required>
                </div>

            </div>
            
            <div class="form-row">
                
                <div class="form-group">
                    <input type="text" id="rua" placeholder="Rua*" required>
                </div>

                <div class="form-group">
                    <input type="tel" id="telefone" placeholder="Telefone*" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="telefone" placeholder="Telefone 2">
                </div>

            </div>
            
            <div class="form-row">
                <div class="form-group-fim">
                    <input type="text" id="contribuinte"  placeholder="Nº de Contribuinte*" required>
                </div>

                <div class="form-group">
                    <input type="email" id="email" placeholder="Email*" required>
                </div>

            </div>
        </div>
        
        <div class="navigation">
            <button class="btn btn-back">VOLTAR</button>
            <button class="btn btn-next">SEGUINTE</button>
        </div>
                    
        </form>
    </div>


        <script>
    // Elementos do DOM
    const photoUpload = document.getElementById('photoUpload');
    const photoInput = document.getElementById('photoInput');
    const photoPreview = document.getElementById('photoPreview');
    const progressSteps = document.querySelectorAll('.progress-step');
    const nextToPage2 = document.querySelector('.btn-next');

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

    // Validações
    function validarBI(bi) {
        const regex = /^[0-9]{9}[A-Z]{2}[0-9]{3}$/;
        return regex.test(bi);
    }

    function validarTelefone(telefone) {
        const regex = /^(?:\+244)?9\d{8}$/;
        return regex.test(telefone);
    }

    function calcularIdade(nascimento) {
        const hoje = new Date();
        const nascimentoDate = new Date(nascimento);
        let idade = hoje.getFullYear() - nascimentoDate.getFullYear();
        const m = hoje.getMonth() - nascimentoDate.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < nascimentoDate.getDate())) {
            idade--;
        }
        return idade;
    }

    function validarDatasBI(emissaoBI, validadeBI) {
        const hoje = new Date();
        const emissao = new Date(emissaoBI);
        const validade = new Date(validadeBI);
        if (emissao > hoje) return 'A data de emissão não pode ser no futuro.';
        if (validade <= hoje) return 'A data de validade deve ser maior que a data atual.';
        return null;
    }

    // Botão para avançar da página 1 para 2
    nextToPage2.addEventListener('click', function (e) {
        e.preventDefault();

        const nome = document.getElementById('nome').value.trim();
        const bi = document.getElementById('bi').value.trim();
        const telefone = document.getElementById('telefone').value.trim();
        const dataNascimento = document.getElementById('nascimento').value;
        const dataEmissao = document.getElementById('emissaoBI').value;
        const dataValidade = document.getElementById('validadeBI').value;

        if (nome === '') {
            alert('Por favor, preencha seu nome completo.');
            return;
        }

        if (estadoCivil === '') {
            alert('Por favor, selecione estado cívil.');
            return;
        }

        if (nacionalidade === '') {
            alert('Por favor, selecione nacionalidade.');
            return;
        }

        if (pai === '') {
            alert('Por favor, preencha nome completo do teu pai.');
            return;
        }

        if (mae === '') {
            alert('Por favor, preencha nome completo da sua mãe.');
            return;
        }


         if (provincia === '') {
            alert('Por favor, selecione província.');
            return;
        }

        if (naturalidade === '') {
            alert('Por favor, preencha municipio');
            return;
        }

        if (municipio === '') {
            alert('Por favor, preencha municipio');
            return;
        }

        if (bairro === '') {
            alert('Por favor, preencha bairro');
            return;
        }

        if (contribuinte === '') {
            alert('Por favor, preencha o número de contribuinte.');
            return;
        }

        if (!validarBI(bi)) {
            alert('Número de B.I. inválido. Use o formato 000000000XX000.');
            return;
        }

        if (!validarTelefone(telefone)) {
            alert('Número de telefone inválido. Use 900000000 ou +244900000000.');
            return;
        }

        if (!dataNascimento) {
            alert('Por favor, informe sua data de nascimento.');
            return;
        }

        if (calcularIdade(dataNascimento) < 18) {
            alert('É necessário ter pelo menos 18 anos.');
            return;
        }

        if (!dataEmissao || !dataValidade) {
            alert('Informe as datas de emissão e validade do B.I.');
            return;
        }

        const erroDatas = validarDatasBI(dataEmissao, dataValidade);
        if (erroDatas) {
            alert(erroDatas);
            return;
        }

        // Se tudo passou, vai para próxima página
        window.location.href = '/formulario2';
    });

    // Botão voltar
    document.querySelector('.btn-back').addEventListener('click', function (e) {
        e.preventDefault();
        window.location.href = '/inscricao';
    });

</script>
    

</body>

@endsection