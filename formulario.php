<?php
if(isset($_POST['submit']))
{
    print_r($_POST['']);
    print_r($_POST['email']);
}
else
{
    echo "não enviou";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Eventos Co.place - Pelotas Parqeu Tecnológico</title>
    <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <header id="header" class="align-items-center fw-bold text-center bg-light">
        <h1>Eventos Co.place - Pelotas Parque Tecnológico</h1>
        <p>Formulário de especificações dos eventos a serem realizados nos espaços da Co.place no Pelotas Parque Tecnológico</p>
    </header>
    <!-- FIM HEADER -->

    <!-- MAIN -->
    <main>

        <!-- FORMULÁRIO -->
        <form class="container" action="formulario.php" method="POST">
            <fieldset>

              <!-- NOME -->
              <div class="mb-3 fw-bold">
                <label for="name" class="form-label">Nome completo</label>
                <input type="text" id="name" class="form-control" placeholder="Digite seu nome e sobrenome" required>
              </div>

             <!-- E-MAIL -->
             <div class="mb-3 fw-bold">
                <label for="e-mail" class="form-label">E-mail</label>
                <input type="email" id="disabledTextInput" class="form-control" placeholder="Digite seu e-mail" required>
             </div>

             <!-- CELULAR -->
             <div class="mb-3 fw-bold">
                <label for="tel" class="form-label">Celular - Whatsapp</label>
                <input type="tel" id="telefone" class="form-control" placeholder="Digite seu telefone (Whatsapp)" >
             </div>

             <!-- NOME DA EMPRESA -->
             <div class="mb-3 fw-bold">
                <label for="nome-empresa" class="form-label">Nome da Empresa</label>
                <input type="text" id="nome-empresa" class="form-control" placeholder="Digite o nome da sua empresa" >
             </div>

              <!-- RAMO DA ATIVIDADE -->
              <div class="mb-3 fw-bold">
                <label for="nome-atividade" class="form-label">Ramo de atividade da sua empresa</label>
                <input type="text" id="nome-atividade" class="form-control" placeholder="Digite a sua resposta" >
             </div>

             <!-- NOME DO EVENTO -->
             <div class="mb-3 fw-bold">
                <label for="nome-evento" class="form-label">Nome do evento</label>
                <input type="text" id="nome-evento" class="form-control" placeholder="Digite a sua resposta" >
             </div>

             <!-- QUANTIDADE PREVISTA DE PARTICIPANTES -->
             <div class="mb-3 fw-bold">
                <label for="participantes" class="form-label">Quantidade prevista de participantes</label>
                <input type="number" id="participantes" class="form-control" placeholder="Digite sua resposta" >
             </div>

             <!-- DATA(S) SOLICITADA(S) - DD/MM/AA - HORARIO INICIO E FIM - -->
             <div class="mb-3 fw-bold">
                <label for="date" class="form-label">Data e Horario de início e fim do evento</label>
                <input type="datetime-local" id="date-start" class="form-control" >
                <input type="datetime-local" id="date-end" class="form-control" >
             </div>

             <!-- DATAS ALTERNATIVAS - DD/MM/AA - HORARIO INICIO E FIM -->
             <div class="mb-3 fw-bold">
                <label for="date" class="form-label">Datas alternativas dd/mm/aaaa</label>
                <input type="datetime-local" id="date-start-alt" class="form-control" >
                <input type="datetime-local" id="date-end-alt" class="form-control" >
             </div>

              <!-- PERIODO DE MONTAGEM E DESMONTAGEM -->
              <div class="mb-3">
                <label  class=" fw-bold" for="date" class="form-label">Necessita período de montagem e desmonstagem do espaço? </label>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="check1" id="check1">
                    <label class="form-check-label" for="check1">Não, até 30 minutos antes e após o evento são suficientes para organização</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check2">
                    <label class="form-check-label" for="check2">Sim, até 1 hora antes do início</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check3">
                    <label class="form-check-label" for="check3">Sim, até 1 hora após o término</label>  
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check4">
                    <label class="form-check-label" for="check4">Sim, 1 turno antes do início</label>   
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check5">
                    <label class="form-check-label" for="check5">Sim, 1 turno após o término</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check6">
                    <label class="form-check-label" for="check6">Outro</label>
                    <!-- PRECISO COLOCAR UM CAMPO DE TEXTO AQUI -->
                </div>
              </div>

             <!-- SELEÇÃO DOS ESPAÇO -->
             <div class="mb-3">
                <label class=" fw-bold">Indique o(s) espaço(s) de interesse para o seu evento</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Auditório</label> 
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">Sala Multiuso I</label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">Sala Multiuso II</label>
                  </div>
             </div>       

             <!-- FORMATAÇAO DOS ESPAÇO -->
             <div class="mb-3 fw-bold">
                <label for="formatacao">Qual a formatação do espaço ideal para o evento que está organizando?</label>
                <div class="mb-3">
                    
                    <img src="img/disposicao.JPG">
                    
                    <select id="disabledSelect" class="form-select">
                      <option>Selecionar</option>
                      <option>Somente cadeiras em formato auditório</option>
                      <option>Sala de aula (cadeiras e mesas coletivas ou cadeiras com prancheta, conforme o espaço)</option>
                      <option>Espinha de peixe (cadeiras e mesas coletivas) - Formato disponível para Sala Multiuso II ou Auditório</option>
                      <option>Workshop (cadeiras e mesas coletivas) - Formato disponível para Sala Multiuso II ou Auditório</option>
                      <option>Formato em U (cadeiras e mesas coletivas) - Formato disponível para Sala Multiuso II ou Auditório</option>
                      <option>Outro formato (indique nas observações no final do questionário)</option>
                    </select>
                  </div>
             </div>

             <!-- ESPAÇO COMPLEMENTAR -->
             <div class="mb-3">
                <label class=" fw-bold">Tem interesse em algum espaço COMPLEMENTAR para realizar seu evento?</label>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="esp-comp1">
                    <label class="form-check-label" for="esp-comp1">Cafeteria (a partir das 18h)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="esp-comp2">
                    <label class="form-check-label" for="esp-comp2">Hall interno</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="esp-comp3">
                    <label class="form-check-label" for="esp-comp3">Arena da Inovação</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="esp-comp4">
                    <label class="form-check-label" for="esp-comp4">Pátio externo</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="esp-comp5">
                    <label class="form-check-label" for="esp-comp5">Não tenho interesse em espaço complementar</label>
                </div>
             </div>

             <!-- EQUIPAMENTOS -->
             <div class="mb-3">
                <label class=" fw-bold" for="equipamentos">Assinale os equipamentos disponibilizados pela Co.place, necessários ao evento
                    *Conforme disponibilidade, de acordo com o tipo de locação e agenda prevista</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento1">
                    <label class="form-check-label" for="equipamento1">Datashow</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento2">
                    <label class="form-check-label" for="equipamento2"> Caixa de som + microfone com fio</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento3">
                    <label class="form-check-label" for="equipamento3">Caixa de som de mesa (salas multiuso)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento4">
                    <label class="form-check-label" for="equipamento4"> Flipchart</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento5">
                    <label class="form-check-label" for="equipamento5">Não será utilizado nenhum dos equipamentos listados</label>
                </div>   
             </div>

             <!-- EQUIPAMENTOS EXTRAS -->
             <div class="mb-3">
                <label  class=" fw-bold" for="equipamento-extra">Assinale se necessita instalação de outros equipamentos e contratação de serviços de terceiros</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento-extra1">
                    <label class="form-check-label" for="equipamento-extra1">Sonorização</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento-extra2">
                    <label class="form-check-label" for="equipamento-extra2">Iluminação</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento-extra3">
                    <label class="form-check-label" for="equipamento-extra3">Ambientação de palco (auditório)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento-extra4">
                    <label class="form-check-label" for="equipamento-extra4">Ambientação do espaço</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="equipamento-extra5">
                    <label class="form-check-label" for="equipamento-extra5">Não é necessário</label>
                </div>   
             </div>

             <!--LISTA DE FORNECEDORES -->
             <div class="mb-3">
                <label for="fornecedores" class="form-label fw-bold">Lista de fornecedores externos que acessarão os espaços</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Digite sua mensagem</label>
                </div>
             </div>

             <!--SERVIÇOS CAFETERIA -->
             <div class="mb-3">
                <label class=" fw-bold">Serviços de Coffee Break produzidos pela Cafeteria da Co.place*</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="coffe" id="coffe1">
                    <label class="form-check-label" for="coffe1">Kit café (térmica de café 1,8litros + descartáveis + balas) R$25,00</label> 
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="coffe" id="coffe2">
                    <label class="form-check-label" for="coffe2">Coffee Break padrão (café, água saborizada, salgados, canapés, sanduíches, bolo e frutas) - opções são enviadas na proposta</label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="coffe" id="coffe3">
                    <label class="form-check-label" for="coffe3">Contratação de serviço de alimentação externo (cliente responsável pela contratação externa) (NÃO PERMITIDO DURANTE A PANDEMIA)</label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="coffe" id="coffe4">
                    <label class="form-check-label" for="coffe4">Não será utilizado nenhum tipo de coffee break</label>
                  </div>
             </div> 

             <!--ACESSO AOS PARTICIPANTES -->
             <div class="mb-3">
                <label class=" fw-bold" for="equipamento-extra">Acesso ao evento para os participantes*</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="acesso1">
                    <label class="form-check-label" for="acesso1">Gratuito</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="acesso2">
                    <label class="form-check-label" for="acesso2">Pago</label>
                </div>
             </div>

             <!--CAMPO PARA DUVIDAS -->
             <div class="mb-3">
                <label class=" fw-bold">Agradecemos as informações e muito em breve entraremos em contato. Fique a vontade para utilizar o espaço abaixo para complementar alguma informação ou para enviar comentários ou dúvidas.</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Digite sua mensagem</label>
                </div>
             </div>
             
             <!-- BOTÃO ENVIAR -->
              <div class="text-center m-5"><button type="submit" class="btn btn-primary">Enviar</button></div>
            </fieldset>
          </form>
          <!-- FIM FIRMULÁRIO -->

    </main>
    <!-- FIM MAIN -->

    <!-- FOOTER -->
    <footer>
        <P class="text m-0 p-3 text-center bg-light">&copy; Copyright <strong>Pelotas Parque Tecnológico</strong>.</P>
    </footer>
    <!-- FIM FOOTER -->

    <!--SETA RETORNO AO TOPO-->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!--FIM SETA RETORNO AO TOPO-->

</body>

</html>