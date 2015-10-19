<?php
	require("questionario.php");
	echo "<form action=\"core\\gabarito.php\" method=\"post\">";
	foreach ($questoes as $key => $value) {
		if($key % 2 == 0){
			echo "<div class=\"row\">";
			echo "<div class=\"col-md-6\" id=\"row" . $key . "col1\">";
			echo "<div class=\"panel panel-default\" id=\"row" . $key . "col1p1\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\">
                Questão " . ($key < 9 ? "0" . ($key + 1) : ($key + 1)) .
              "</h3>
            </div>
            <div class=\"panel-body\">
              <p>$value[0]</p>
              <div class=\"list-group\">
                  <label class=\"list-group-item\" for=\"q" . ($key+1) . "a1\"><input id=\"q" . ($key+1) . "a1\" name=\"resp[$key]\" value=\"A\" type=\"radio\"> $value[1]</label>
                  <label class=\"list-group-item\" for=\"q" . ($key+1) . "a2\"><input id=\"q" . ($key+1) . "a2\" name=\"resp[$key]\" value=\"B\" type=\"radio\"> $value[2]</label>
                  <label class=\"list-group-item\" for=\"q" . ($key+1) . "a3\"><input id=\"q" . ($key+1) . "a3\" name=\"resp[$key]\" value=\"C\" type=\"radio\"> $value[3]</label>
                  <label class=\"list-group-item\" for=\"q" . ($key+1) . "a4\"><input id=\"q" . ($key+1) . "a4\" name=\"resp[$key]\" value=\"D\" type=\"radio\"> $value[4]</label>
              </div>
            </div>
          </div>
          </div>";
		}else{
			echo "<div class=\"col-md-6\" id=\"row" . ($key-1) . "col2\">";
			echo "<div class=\"panel panel-default\" id=\"row" . ($key-1) . "col2p2\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\">
                Questão " . ($key < 9 ? "0" . ($key + 1) : ($key + 1)) .
              "</h3>
            </div>
            <div class=\"panel-body\">
              <p>$value[0]</p>
              	<div class=\"list-group\">
                  <label class=\"list-group-item\" for=\"q" . ($key+1) . "a1\"><input id=\"q" . ($key+1) . "a1\" name=\"resp[$key]\" value=\"A\" type=\"radio\"> $value[1]</label>
                  <label class=\"list-group-item\" for=\"q" . ($key+1) . "a2\"><input id=\"q" . ($key+1) . "a2\" name=\"resp[$key]\" value=\"B\" type=\"radio\"> $value[2]</label>
                  <label class=\"list-group-item\" for=\"q" . ($key+1) . "a3\"><input id=\"q" . ($key+1) . "a3\" name=\"resp[$key]\" value=\"C\" type=\"radio\"> $value[3]</label>
                  <label class=\"list-group-item\" for=\"q" . ($key+1) . "a4\"><input id=\"q" . ($key+1) . "a4\" name=\"resp[$key]\" value=\"D\" type=\"radio\"> $value[4]</label>
              </div>
            </div>
            </div>
          </div>
          <script>

          	var altura1 = document.getElementById('row" . ($key-1) . "col1').offsetHeight;
          	var altura2 = document.getElementById('row" . ($key-1) . "col2').offsetHeight;

          	var altura1p = document.getElementById('row" . ($key-1) . "col1p1').offsetHeight;
          	var altura2p = document.getElementById('row" . ($key-1) . "col2p2').offsetHeight;



          	if(altura1p > altura2p){
          		document.getElementById('row" . ($key-1) . "col2p2').style.height = (altura1-20) + 'px';
          	}else{
          		document.getElementById('row" . ($key-1) . "col1p1').style.height = (altura2-20) + 'px';
          	}

          </script>
          ";

          echo "</div>";
		}
	}
	echo "<div class=\"row\">";
	echo "<div class=\"col-md-12\">";
	echo "<input class=\"btn btn-primary pull-right\" type=\"submit\" value=\"Próximo\">";
	echo "</div><br><br>";
	echo "</div>";
	echo "</form>";

?>