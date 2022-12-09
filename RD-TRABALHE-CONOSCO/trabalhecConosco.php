
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Traballhe Conosco</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./style2.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div class="navbar-fixed">
    <nav class="black" role="navigation">
      <div class="nav-wrapper container navbar-fixed">
        <a id="logo-container" href="#" class="brand-logo"><img src="RD (5).png" class="logo" alt=""></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/RD-Home-Page/index.html">Home</a></li>
          <li><a href="#">Locação</a></li>
          <li><a href="">Orçamento</a> </li>
          <li><a href="#">Trabalhe Conosco</a></li>
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
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      
  <div class="row">
    <form class="col s12" method="POST" name="envia-email" action="/envio.php">
        <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="nome" type="text" class="validate" name="nome">
              <label for="nome">Nome completo</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">mail</i>
              <input id="email" type="email" class="validate" name="email">
              <label for="email">Email</label>
            
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">home</i>
                <input id="endereco" type="text" class="validate" name="endereco">
                <label for="endereco">Endereço</label>
              
              </div>

            <label></label>
                <select class="browser-default" name="formacao">
                    <option value="" disabled selected>Qual a sua formação?</option>
                    <option value="1">Medio</option>
                    <option value="2">Tecnico</option>
                    <option value="3">Superior</option>
                </select>

                <label></label>
                <select class="browser-default" name="disponibilidade">
                    <option value="" disabled selected>Disponibilidade de horário?</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                    <option value="3">Não sei</option>
                </select>
          </div>
          
        <div class="row center">
            
                 <div class="file-field input-field">
                  <div class="btn #ff8f00 amber darken-4">
                        <span>Anexar arquivo</span>
                    <input type="file" name="curriculo" required/>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload currículo">
                  </div>
                </div>           
            <button class="btn #ff8f00 amber darken-4 center-align btn-large" type="submit" name="action">Enviar Dados
          
            
           </button>
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
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Ou nos contate diretamente!</h4>
          <div id="mapaEnd" class="centro">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4793320284557!2d-34.88741928571189!3d-8.05248918266852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1997eb26b1bb%3A0x38559aaa17ddef7c!2sFaculdade%20Senac%20Pernambuco!5e0!3m2!1spt-BR!2sbr!4v1662042851084!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
        </div>
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
    <div class="parallax"><img src="./background3.jpg" alt="Unsplashed background img 3"></div>
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
