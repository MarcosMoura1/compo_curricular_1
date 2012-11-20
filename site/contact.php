<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Compras no Paraguai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compras no paraguai">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          
          <a class="brand" href="#">Meu Site</a>
          <div class="nav-collapse collapse">
            
            <ul class="nav">
              <li class="active"><a href="contact.php">Contatos</a></li>
              <li><a href="page1.php">Pagina 1</a></li>
              <li><a href="page2.php">Pagina 2</a></li>
        <li><a href="aboutme.php">Sobre Mim</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">


<h1> Contato</h1>
</div>

<form action="formulario.php" method="POST">
<fieldset>
<legend>Formulário de Contato</legend>

<input type="hidden" name"pagina"value="contato">

<label for= "idNome">Nome:</label>
<input type="text" name="nome" id="idNome">

<label for= "idEmail">E-mail:</label>
<input type="email"name="email" id="idEmail">

<label for= "idMensagem">Mensagem:</label>
<textarea name="mensagem" id = "idMensagem" rows="3"></textarea>

<br>
<button class="btn btn-primary">Enviar Informações</button>
	</fieldset>

</form>