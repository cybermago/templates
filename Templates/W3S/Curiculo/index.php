<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<title>Blog</title>
<meta charset="UTF-8">
<meta name="author" content="Jonatã Mendes">
<meta name="decription" content="">
<meta name="keywords" content="">
<meta http-equiv="refresh" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/cssresetnormalise.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="imagens/icon/favicon.ico" type="image/x-ico/">
<link rel="stylesheet" href="css/estilo.css" type="text/css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <h1>Meu Logo</h1>
    </div>
    <div class="w3-padding-64">
      <a href="#" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Inicio</a>
      <a href="#work" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">Meu Trabalho</a>
      <a href="#work" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">Resmo</a>
      <a href="#contact" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Contato</a>
    </div>
  </div>
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1>Sobre Mim</h1>
      <img src="/imagens/avatar3.png" class="w3-margin w3-circle" alt="Person" style="width:50%">
      <div class="w3-left-align w3-padding-large">
        <p>Lorem ipusm sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Lorem ipusm sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>
</div>

<!-- Second Grid: Work & Resume -->
<!--<div class="w3-row">
  <div class="w3-half w3-light-grey w3-center" style="min-height:800px" id="work">
    <div class="w3-padding-64">
      <h2>Meu Trabalho</h2>
      <p>Alguns dos meus projetos.</p>
    </div>
    <div class="w3-row">
      <div class="w3-half">
        <img src="/w3images/coffee.jpg" style="width:100%">
      </div>
      <div class="w3-half">
        <img src="/w3images/workbench.jpg" style="width:100%">
      </div>
    </div>
    <div class="w3-row w3-hide-small">
      <div class="w3-half">
        <img src="/w3images/workbench.jpg" style="width:100%">
      </div>
      <div class="w3-half">
        <img src="/w3images/coffee.jpg" style="width:100%">
      </div>
    </div>

    <div class="w3-row w3-hide-small">
      <div class="w3-half">
        <img src="/w3images/sound.jpg" style="width:100%">
      </div>
      <div class="w3-half">
        <img src="/w3images/workbench.jpg" style="width:100%">
      </div>
    </div><br>
    <p>Apens me chame de Incrivel.</p>
  </div>-->
  <div class="w3-half w3-indigo w3-container" style="min-height:800px;width:100%">
    <div class="w3-padding-64 w3-center">
      <h2>Currículo</h2>
      <p>Um rascunho do meu CV</p>
      <div class="w3-container w3-responsive">
        <table class="w3-table">
          <tr>
            <th>Ano</th>
            <th>Titulo</th>
            <th>Onde</th>
          </tr>
          <tr class="w3-white">
            <td>2013-2014</td>
            <td>The rest is history..</td>
            <td>Lorem ipsum</td>
          </tr>
          <tr>
            <td>20014-2015</td>
            <td>Started my own company</td>
            <td>My Garage</td>
          </tr>
          <tr class="w3-white">
            <td>2017-2019</td>
            <td>Curso Tecnico emImformática</td>
            <td>IEMA Instituto de Educação Ciência e Tecnologia do Maranhão, Coroatá, Maranhão</td>
          </tr>
          <!--<tr>
            <td>2005-2008</td>
            <td>Degree in Bachelor of Design</td>
            <td>Harvard, USA</td>
          </tr>
          <tr class="w3-white">
            <td>2002-2005</td>
            <td>Degree in Bachelor of Business</td>
            <td>RMIT University, Melbourne, Australia</td>
          </tr>
          <tr class="w3-hide-medium">
            <td>2017-2019</td>
            <td>Degree in Bachelor of Business</td>
            <td></td>
          </tr>-->
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Third Grid: Swing By & Contact -->
<div class="w3-row" id="contact">
  <div class="w3-half w3-dark-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <h1>Contate-me</h1>
    </div>
    <div class="w3-padding-64">
      <p>..para uma café, ou qualquer outra coisa.</p>
      <p>Coroatá, MA</p>
      <p>+55 99988053331</p>
      <p>mjonata736@gmail.com</p>
    </div>
  </div>
  <div class="w3-half w3-teal w3-container" style="height:700px">
    <div class="w3-padding-64 w3-padding-large">
      <h1>Contato</h1>
      <p class="w3-opacity">ENTRE EM CONTATO</p>
      <form class="w3-container w3-card w3-padding-32 w3-white" method="post" action="/processa.php" target="_blank">
        <div class="w3-section">
          <label>Nome</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Name">
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Email">
        </div>
        <div class="w3-section">
          <label>Menssagem</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Message">
        </div>
        <button type="submit" class="w3-button w3-teal w3-right">Enviar</button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
