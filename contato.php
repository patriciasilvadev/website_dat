<?php
// HN WEB SITES: www.hnwebsites.com


$text = "<span style='color:black; font-size: 30px; line-height: 40px; magin: 10px;'></span>";

if(isset($_POST['nome']))
{
  $nome=$_POST['nome'];
  $email=$_POST['email'];
  $fone=$_POST['fone'];
    $whats=$_POST['whats'];
  $assunto=$_POST['assunto'];
  $message=$_POST['message'];

  $to = "datamac@datamac.com.br";
  $subject = "Contato";
  $message = " Nome Completo: " . $nome 
  ."\r\n E-mail de Contato: " . $email 
  . "\r\n Telefone com DDD: " . $fone 
    . "\r\n Whatsapp: " . $whats 
  . "\r\n Assunto: " . $assunto 
  . "\r\n Mensagem ou Duvida:\r\n" . $message;
   
  $from = "Suporte - Datamac";
  $headers = "From:" . $from . "\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
   
  if(@mail($to,$subject,$message,$headers))
  {
    $text = "<span style='color:black; font-size: 20px; line-height: 40px; margin: 10px;'>Mensagem enviada!!</span>";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Datamac Automação Comercial</title>
  
  <link rel="shortcut icon" href="/../img/logos/ico.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css"> 
  <link rel="stylesheet" type="text/css" href="css/icomoon.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" href="css/animate.css"> 
  <link rel="stylesheet" href="css/owl.carousel.css"> 
  <link rel="stylesheet" href="css/rev-settings.css"> 
  <link rel="stylesheet" type="text/css" href="css/styles-2.css" id="main_styles">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <style>
  
    /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (min-width: 1200px) and (max-width: 2200px) {
    iframe{
        width: 600px;
    height: 600px; 
    }
}
  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (min-width: 1001px) and (max-width: 1200px) {
    iframe{
        width: 500px;
    height: 600px; 
    }
}
/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (min-width: 761px) and (max-width: 1000px) {
    iframe{
        width: 400px;
    height: 600px; 
    }
}  
  
/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (min-width: 601px) and (max-width: 760px) {
    iframe{
        width: 600px;
    height: 500px; 
    }
}
/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (min-width: 500px) and (max-width: 600px) {
    iframe{
        width: 500px;
    height: 500px; 
    }
}
/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (max-width: 499px) {
    iframe{
        width: 400px;
    height: 300px; 
    }
}
/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
  <style>
  </style>
  </head>
  <body>
  <a href="https://wa.me/5511996579667?" style="position:fixed;width:60px;height:60px;bottom:40px;left:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>
    <div id="top-bar" class="hidden-md-down"> 
      <div class="container"> <div class="row"> 
        <div class="col-md-9 col-12"> <ul class="top-bar-info"> 
          <li><i class="fa fa-phone" style="color:red"></i>PABX: (11) 2621-5151</li>
          <li><i class="fa fa-map-marker" style="color:red"></i>Rua Ulisses Cruz nº 1048 - Tatuapé - SP</li>
          <li><i class="fa fa-envelope" style="color:red"></i>E-mail: datamac@datamac.com.br</li>
          </ul> 
        </div>
        <div class="col-md-3 col-12">
          <ul class="social-icons hidden-sm">
            <li><a href="https://pt-br.facebook.com/DatamacAutomacaoComercial/"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
      </div>
      </div>
    </div>
  <header>
    <nav id="navigation4" class="container navigation">
      <div class="nav-header"> <a class="nav-brand" href="index.html"> <img src="/../img/logos/logo-2.png" alt="logo" class="main-logo" id="main_logo"></a>
        <div class="nav-toggle"></div>
        </div>
      <div class="nav-menus-wrapper">
        <ul class="nav-menu align-to-right">
          <li><a href="index.html">HOME</a></li>
          <li><a href="empresa.html">EMPRESA</a></li>
          <li><a href="#">SOLUÇÕES</a>
            <ul class="nav-dropdown">
              <li><a href="Solução Fiscal Ifox iSAT Regitradora iFOX.pdf" target="new">Solução iSAT Registradora IFOX</a></li>
              <li><a href="produtos/16.html">Solução Gestão Food Service</a></li>
              <li><a href="produtos/17.html">Solução Gestão de Loja</a></li>
              <li><a href="produtos/30.html">Solução Gestão e Emissor de NFe</a></li>
              </ul>
            </li>
          <li><a href="#">PRODUTOS</a>
            <ul class="nav-dropdown">
              <li><a href="#">SAT</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/10.html">SAT Fiscal Tanca TS-1000</a></li>
                  <li><a href="produtos/09.html">SAT Fiscal Linker II </a></li>
                  <li><a href="produtos/20.html">SAT Fiscal Jetway JS-1000 </a></li>
                  </ul>
                </li>
              <li><a href="#">Impressoras</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/29.html">Impressora não fiscal Tanca TP 450</a></li>
                  <li><a href="produtos/31.html">Impressora não fiscal Tnaca TP 650</a></li>
                  <li><a href="produtos/23.html">Impressora não fiscal Jetway JP 800</a></li>
                  </ul>
                </li>
              <li><a href="#">Gavetas</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/27.html">Gaveta Tanca TG - 500</a></li>
                  </ul>
                </li>
              <li><a href="#">Leitor</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/28.html">Leitor Tanca TL 120</a></li>
                  <li><a href="produtos/22.html">Leitor Tanca TL 220</a></li>
                  </ul>
                </li>
              <li><a href="#">Balanças</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/01.html">Toledo Prix 3 Plus</a></li>
                  <li><a href="produtos/02.html">Balança Toledo Prix 3 FIT</a></li>
                  <li><a href="produtos/03.html">Balança Toledo Prix 4 Ethernet</a></li>
                  <li><a href="produtos/04.html">Balança Toledo Prix 4 Uno Wi-Fi</a></li>
                  <li><a href="produtos/11.html">Balança Toledo Prix 5 Wi-Fi</a></li>
                  <li><a href="produtos/12.html">Balança Toledo 6 Standard e Web</a></li>
                  </ul>
                </li>
              <li><a href="#">Microterminais</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/14.html">iFox</a></li>
                  <li><a href="produtos/18.html">Comm5 TF1000</a></li>
                  <li><a href="produtos/19.html">Willtech W600</a></li>
                  </ul>
                </li>
              <li><a href="#">Computador</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/08.html">Tanca TC-6240 /TC-6240S</a></li>
                  <li><a href="produtos/06.html">Newera E3 Nano</a></li>
                  <li><a href="produtos/07.html">Newera E3 PRO</a></li>
                  </ul>
                </li>
              <li><a href="#">Monitor</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/25.html">TML-150 / TML-190</a></li>
                  <li><a href="produtos/24.html">TMT-520 Touch Screen</a></li>
                  </ul>
                </li>
              <li><a href="#">Insumos</a>
                <ul class="nav-dropdown">
                  <li><a href="produtos/21.html">Bobina Térmica 80x40</a></li>
                  <li><a href="produtos/15.html">Etiqueta para Balança</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          <li><a href="servicos.html">SERVIÇOS</a></li>
          <li><a href="downloads.html">DOWNLOADS</a></li>
          <li><a href="contato.php">CONTATO</a></li>
          </ul>
        </div>
      </nav>
  </header>
  
  <div class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6"> 
    <div class="container text-center"> 
      <h1>Contato</h1> 
      <ul> <li><a href="index.html">Home</a></li>
  <li><a href="contato.php">Contato</a></li>
</ul> </div></div>



<div> <p><br><br><br></p></div>
<div class="row" class="container">

  <div class="column">

    <div class="card">
      <h4>Comercial</h4>
      <p style="color:black">Segunda à Quinta  das 8h às 18h<br>Sexta das 8h às 17h</p><br>
      <p style="color:black"><i class="fa fa-envelope" style="color:red"></i>&nbsp;datamac@datamac.com.br</p>
    <p style="color:black"><i class="fa fa-whatsapp" style="color:#34af23"></i>&nbsp;(11) 99657-9667</p><br>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h4>Financeiro</h4>
      <p style="color:black">Segunda à Quinta  das 8h às 18h<br>Sexta das 8h às 17h</p><br>
      <p style="color:black"><i class="fa fa-envelope" style="color:red"></i>&nbsp;financeiro@datamac.com.br</p>
    <p style="color:black"><i class="fa fa-envelope" style="color:red"></i>&nbsp;adm@datamac.com.br</p>
    <p style="color:black"><i class="fa fa-whatsapp" style="color:#34af23"></i>&nbsp;(11) 98264-3158</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h4>Suporte Técnico</h4>
      <p style="color:black">Segunda à Quinta  das 8h às 18h<br>Sexta das 8h às 17h</p><br>
      <p style="color:black"><i class="fa fa-envelope" style="color:red"></i>&nbsp;suporte@datamac.com.br</p>
    <p style="color:black"><i class="fa fa-phone" style="color:red"></i>&nbsp;(11) 2621-5151</p><br>
    </div>
  <br>
  </div>
  
  <div class="column">
    <div class="card">
      <h4>Suporte de Plant&atilde;o</h4>
      <p style="color:black">Atendimento todos os dias<br>Das 7h às 22h</p><br>
      <p style="color:black"><i class="fa fa-whatsapp" style="color:#34af23"></i>&nbsp;(11) 9 5555-6940</p>
    <p style="color:black"><i class="fa fa-whatsapp" style="color:#34af23"></i>&nbsp;(11) 9 7138-1840</p><br>
    </div>
  </div>
</div>
  <div> <p><br><br><br></p></div>
  
  
  


  
    <div class="container-fluid pl-0 pr-0"> 
    <div class="row no-gutters"> 
    <div class="col-md-6 col-sm-12 col-12"> <div class="padding-10-perc"> 
    <div class="section-heading text-left"> 
    <small class="grey-color font-size-20 font-weight-normal">Fale com nosso suporte</small> 
          <h3 class="semi-bold font-size-32">
        <span class="center"><?php echo $text;?></span></h3> 
    <div class="section-heading-line line-thin"></div></div>
    <form method="post" action="#" class="primary-form-3 mt-45"> 
      <div class="row"> 
        <div class="col-md-6 col-sm-6 col-12">
        <input type="text" name="nome" placeholder="Nome*" id="nome"> 
        </div>
        <div class="col-md-6 col-sm-6 col-12"> 
          <input type="text" name="fone" placeholder="Telefone*" id="fone"> 
        </div>
        <div class="col-md-6 col-sm-6 col-12">
        <input type="text" name="email" placeholder="E-mail*" id="email"> 
        </div>
        <div class="col-md-6 col-sm-6 col-12"> 
          <input type="text" name="whats" placeholder="Whatsapp*" id="whats"> 
        </div>
        <div class="col-12"> 
          <select name="assunto" id="assunto"> 
            <option>Suporte</option> 
            <option>Financeiro</option> 
            <option>Cobrança</option> 
          </select> 
        </div>
        <div class="col-12"> 
          <textarea placeholder="Deixe sua mensagem ou solicite nosso contato*" name="message"></textarea> 
        </div>
      </div>
      <div> 
        <button type="submit" class="button-md button-primary text-uppercase ml-0">Enviar </button>
      </div>
    </form> 
    </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12"> 
      <div class="full-background min-350"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.084470359605!2d-46.58011548502298!3d-23.529464084698727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5edf43e8caff%3A0xba90f90959bd8ca4!2sR.%20Ulisses%20Cruz%2C%201048%20-%20Tatuap%C3%A9%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003077-000!5e0!3m2!1spt-BR!2sbr!4v1645647869381!5m2!1spt-BR!2sbr" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </div></div></div></div>
  <footer> 
    <div class="footer-1"> 
      <div class="container"> 
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12"> <a href="#"><img src="/../img/logos/rodape.png" alt="logo" id="footer_logo"></a>
            <p class="mt-20">Ser reconhecida como sinônimo de inovação, tecnologia, qualidade e excelência nos serviços prestados.</p>
            </div>
          <div class="col-md-3 col-sm-6 col-12"> 
        <h2> Links</h2> 
            <div class="row mt-25"> 
              <div class="col-md-6 col-sm-6"> 
            <ul class="footer-nav"> 
              <li><a href="produtos/10.html">SAT</a></li>
              <li><a href="produtos/29.html">Impressoras</a></li>
              <li><a href="produtos/08.html">Computadores</a></li>
              <li><a href="produtos/28.html">Leitor</a></li>
              <li><a href="produtos/01.html">Balanças</a></li>
              <li><a href="produtos/27.html">Gaveta</a></li>
              <li><a href="produtos/25.html">Monitor</a></li>
              <li><a href="produtos/14.html">Microterminal</a></li>
            </ul> 
              </div>
            <div class="col-md-6 col-sm-6"> 
              <ul class="footer-nav"> <li><a href="index.html">Home</a></li>
              <li><a href="empresa.html">Empresa</a></li>
              <li><a href="#">Produtos</a></li>
              <li><a href="servicos.html">Serviços</a></li>
              <li><a href="downloads.html">Donwloads</a></li>
              <li><a href="contato.php">Contato</a></li>
              </ul> 
            </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 col-12"> 
            <h2>Contate-nos</h2> 
            <ul class="footer-news mt-25"> 
              <li><a href="#">Fale via - Skype</a> <strong><i class="fa fa-skype" style="color:#00aff0"></i> glauber_hiro</strong></li>
<li><a href="#">Envie seu e-mail</a> <strong><i class="fa fa-envelope" style="color:red"></i> datamac@datamac.com.br</strong></li>
              </ul> 
          </div>
          <div class="col-md-3 col-sm-6 col-12"> 
            <h2>Telefones</h2>

<br>

<p>Fone PABX<br> <i class="fa fa-phone" style="color:red"></i> 11 2621-5151</p>

<br>

<p>Whatsapp Comercial<br />
<i class="fa fa-whatsapp" style="color:#34af23"></i> 11 9 9657-9667</p>

<br>

<p>Whatsapp Suporte de Plant&atilde;o<br />
<i class="fa fa-whatsapp" style="color:#34af23"></i> 11 9 5555-6940<br />
<i class="fa fa-whatsapp" style="color:#34af23"></i> 11 9 7138-1840</p>

</div></div>
        <div class="footer-1-bar"> <p>&reg; DATAMAC Automação Comercial - Rua Ulisses Cruz nº 1048 - Tatuapé - SP - CEP: 03077-000 - CNPJ: 58.580.077/0001-68</p></div></div></div>
    </footer>
    
    <a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/navigation.fixed.js"></script>
    <script src="js/map.js"></script>
    <script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/rev-slider/revolution.extension.video.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>