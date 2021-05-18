<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Recebe Dados</title>

    <meta charset="utf-8">
	<style>
		.red {color : red}
		.green	{color : green}
	</style>
</head>
<body>
<div>

<form method="POST" action="index.php">
<p>km Rodado : </p> <input type="number" required="" placeholder="KM" name="km">
<p>Litros de combustivel: </p> <input type="number" required="" placeholder="LT" name="lt">

<input type="submit" value="Verificar"/>


    </form>

</div>
    </body>
    </html>



<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


	if(isset($_GET['media'])) {
		$media = $_GET['media'];
		if ($media >= 10) {
             echo '<h2 class="green"> Sua  média é ' . number_format($media, 2) . ' </h2>';
            }
        else{

			    echo '<h2 class="red"> Sua média é ' . number_format($media, 2) . ' </h2>';
		    }
	}
?>



