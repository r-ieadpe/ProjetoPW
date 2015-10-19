<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/style.css">
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>

	<meta charset="UTF-8">
  	<title>Sistema de simulado</title>
  	<meta name="viewport" content="width=device-width">
</head>
<body>
	
		<div class="jumbotron jbt1">
  <div class="container">
	<h1>Ótima escolha!</h1>
  <p>Obrigado por usar nosso sistema de simulados! 
  Preencha todas as respostas e consulte seu resultado.</p>
</div>

		<nav class="navbar navbar-inverse navbar-static-top menu">
      <div class="container">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Home</a>
  </div>
  <ul class="nav navbar-nav">
    <li><a href="sobre.php">Sobre</a></li>
  </ul>
</div>
</nav></div>
	<div id="corpo" class="container">

        <?php
            require("\core\prova.php");
        ?>

</div>
<div class="jumbotron jbt2">
  <div class="container">
        Copyright
      </div>
      </div>
</body>
</html>