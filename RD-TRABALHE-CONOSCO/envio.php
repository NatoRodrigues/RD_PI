<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

// criar objeto email para usar a biblioteca
$mail = new PHPMailer(true);
$output = '';

if (isset($_POST['action'])) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'renwise2.0@gmail.com';
        $mail->Password = 'xgzwrflpwqdlknfs';
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->setFrom('renwise2.0@gmail.com');
        $mail->addAddress('renwise2.0@gmail.com');
        $mail->addAttachment('upload/curriculo.pdf', 'curriculo.pdf');
        $mail->isHTML(true);
        $mail->Subject = 'Curriculo para vaga';
        $mail->Body = "<h3>Nome : $name <br>Email : $email  <br>Endereço: $endereco";

        $mail->send();
        $output = '<div class="alert alert-success"><h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5></div>';
    }
    catch (Exception $e) {
        echo "error";
    }


  $conexao = new PDO('mysql:host;dbname=bancoTalentos', 'root');

  //vai passar a validação para o banco de dados
  $pdo = new PDO('mysql:host=localhost;dbname=bancoTalentos', 'root');
  $sql = $pdo->prepare("INSERT INTO candidatos VALUES(null, ?,?,?)");
  $sql->execute(array($name, $email, $endereco));

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Traballhe Conosco</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./css/style2.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<script>
    function scrollWin() {
      window.scrollTo(0, 6000);
    }
    </script>
  <div class="navbar-fixed">
    <nav class="black" role="navigation">
      <div class="nav-wrapper container navbar-fixed">
        <a id="logo-container" href="#" class="brand-logo"><img src="./img/RD (5).png" class="logo" alt=""></a>
        <ul class="right hide-on-med-and-down">
        <li><a href="/RD-HOME-PAGE/index.html">Home</a></li>
        <li><a href="/RD-MAQUINARIO/maquinario.html">maquinario</a></li>
        <li><a href="/RD-EQUIPAMENTOS/equipamentos.html">Equipamentos</a></li>
        <li><a href="/RD-ORCAMENTO/index.html">Orçamento</a> </li>
        <li><a href="/RD-QUEM-SOMOS/quemsomos.html">Quem somos</a></li>
        <li><a href="/RD-TRABALHE-CONOSCO/trabalhecConosco.html">Trabalhe Conosco</a></li>
        <li><a onclick="scrollWin()">Fale Conosco</a></li>
        </ul>
  </div>
        <ul id="nav-mobile" class="sidenav">
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons" id="menu">menu</i></a>
      </div>
    </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center orange-text text-darken-3">Trabalhe Conosco</h1>
        <div class="row center">
          <h5 class="header col s12 light">Temos vagas disponíveis em toda região metropolitana do Recife</h5>
        </div>
        <div class="row center">
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="./img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      
  <div class="row">
    <form class="col s12" method="POST" name="envia-email" action="/envio.php">
        <div class="row">
            <center>
        <i class="large material-icons">mail</i>

    <h5>Email enviado com Sucesso. Em breve entraremos em contato por email!</h5></center>
            </div>
           
         </div>

        </div>
      </div>
    </form>
  </div>
        

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          
        </div>
      </div>
    </div>
    <div class="parallax"><img src="./img/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">


    </div>
  </div>
  </div>

  <footer class="page-footer teal  orange darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Quem somos</h5>
          <p class="grey-text text-lighten-4">Nossa equipe se orgulha do serviço personalizado. Temos apenas especialistas na área trabalhando com você e garantimos que você obterá as informações de que precisa; de forma rápida e precisa. Valorizamos nossos clientes e valorizamos os relacionamentos que temos colhidos ao longo dos anos. Queremos que você experimente a diferença da RD Locações!</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">localização</h5>
          <ul>
            <li><a class="white-text" href="https://goo.gl/maps/SACPnBMe5hnVvqiv8">Av. Sen. Nilo de Souza Coelho, 1652 - Jardim Brasil, Recife - PE</a></li>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.8153985547156!2d-34.87677498530341!3d-7.99945739423908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab17f77475f81d%3A0x9902613eeda108a5!2sAv.%20Sen.%20Nilo%20de%20Souza%20Coelho%2C%201652%20-%20Jardim%20Brasil%2C%20Olinda%20-%20PE%2C%2053260-551!5e1!3m2!1spt-BR!2sbr!4v1669848876896!5m2!1spt-BR!2sbr" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contate-nos</h5>
          <ul>
            <li><a onclick="abreEmail()" class="white-text" href="mailto: rrsilva.comerciolocacoes@hotmail.com">Email: rrsilva.comerciolocacoes@hotmail.com</a></li>
            <li>Fone/Whatsapp para contato<a onclick="abreZap()" class="white-text" href="https://api.whatsapp.com/send?phone=5581983472924">: 081983472924</a></li>
            <li><a class="white-text" href="https://instagram.com/rd.locacoes1000?igshid=MTg0DhmNDA=">Instagram: @rd.locacoes1000</a></li>
          </ul>
        </div>
      </div>
    </div>
   <CENTER> <div class="footer-copyright orange darken-4">
      <div class="container">
      RD LOCAÇÕES - Todos os direitos reservados &copy <a class="brown-text text-lighten-3" href="http://materializecss.com"></a>
      </div>
    </div></CENTER>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
