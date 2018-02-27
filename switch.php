<html>
<head>
	<title>Ejemplo de uso del Swtch</title>
</head>

<body>
Ejemplo de un Switch 
<br><br>
<?php
	$dia = 5;
	switch($dia){
		case 1:
			echo "El dia es Lunes";
			break;
		case 2:
			echo "El dia es Martes";
			break;
		case 3:
			echo "El dia es Miercoles";
			break;
		case 4:
			echo "El dia es Jueves";
			break;
		case 5:
			echo "El dia es Viernes";
			break;
		case 6:
			echo "El dia es Sabado";
			break;
		case 7:
			echo "El dia es Domingo";
			break;
		case 8:
			echo "La variable contiene otro valor";
			echo "Distitnto a los dias de la semana";
			
	}
?>
</body>
</html>