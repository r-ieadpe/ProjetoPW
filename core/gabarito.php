<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	  <link rel="stylesheet" href="../css/style.css">
	
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>

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
    <a class="navbar-brand" href="../index.php">Home</a>
  </div>
  <ul class="nav navbar-nav">
    <li><a href="../sobre.php">Sobre</a></li>
  </ul>
</div>
</nav></div>
	<div id="corpo" class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                Resultado</h3>
            </div>
            <div class="panel-body">
            	<ul class="list-group">
        <?php
            require("questionario.php");
			
            if(count($_REQUEST)>0){

            $respostas = $_POST['resp'];

            $totalQuestoes = count($gabaritoOficial);
            $totalRespondidas = count($respostas);

            $corretas = 0;

            foreach ($respostas as $key => $value) {
            	
  				if($respostas[$key] == $gabaritoOficial[$key]){
  					$corretas++;
  				}
						
            }
			
            echo "<li class=\"list-group-item\"><span class=\"badge\">$totalQuestoes</span>Total de questões</li>";
            echo "<li class=\"list-group-item\"><span class=\"badge\">$totalRespondidas</span>Total de questões respondidas</li>";
            echo "<li class=\"list-group-item list-group-item-success\"><span class=\"badge\">$corretas</span>Total de questões corretas</li>";
            echo "<li class=\"list-group-item\"><span class=\"badge\">" . ($totalQuestoes-$corretas) . "</span>Total de questões incorretas</li>";
			}else{
				echo "<div class=\"jumbotron\"><h4>Sem resultados</h4></div>";
			}
        ?>
        </ul>
        </div>
            </div>
        	</div>
        </div>

</div>
<div class="jumbotron jbt2">
  <div class="container">
        Copyright
      </div>
      </div>
</body>
</html>