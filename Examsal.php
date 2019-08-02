<?php
$nombre=$_GET["nombre"];
	$sueldo=$_GET["sueldo"];
	$modalidad=$_GET["modalidad"];
	$bono=$_GET["bono"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/materialize.min.css">
</head>
<body>
	<div class="container">
        <h4 class="center"><?php echo $nombre; ?></h4>
        <table>
        	<tr>
        		<th><h8><?php echo "sueldo por dia: "; ?></h8></th>
        		<th><?php echo $sueldo; ?></th>
        		<th><h8><?php echo "Modalidad: "; ?></h8></th>
        		<th><?php echo $modalidad; ?></th>
        	</tr>
        	<tr>
        		<th><h8><?php echo "Total a pagar: "; ?></h8></th>
        		<th><?php 
					if($modalidad == "Mes")
					{
						echo $res=$sueldo*30;
					}else
					{
						echo $res=$sueldo*15;
					}
					?></th>
        		<th><h8><?php echo "Total con bono: "; ?></h8></th>
        		<th><?php 
					if($bono =="si")
					{
						echo $resbono=$res+500;

					}else
					{
						echo $resbono=$res;
					}
					?></th>
        	</tr>
        </table>
    </div>

	<!--<H4><?php /*echo "$nombre es un  $sexo  que tiene $edad años, su correo es: $correo y trabaja de $cargo"*/?> </H4>-->
	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/jquery.validate.min.js"></script>
</body>
</html>