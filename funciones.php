<html>
<head>
 <title>Ejercicio 1</title>
 </head>
<body>
<?php

function mayor($num1, $num2)
{
	if($num1 > $num2){
		// echo "El $num1 es mayor que el $num2 .<br>";
		return $num1;
	}
	else{
		// echo "El ".$num2." es mayor que el ".$num1." .";
		return $num2;
	}
};

function multiplicacion($num1, $num2){
	return $num1 * $num2;
};

function mayorEdad($edad){


if($edad < 18){
	return 0;
}
else{
	return 1;
}
};

function capicua($num1){
if($num1 == strrev($num1)){
	return 1;
}
else{
	return 0;
}
};

function numeroCaracteres($num1){
	$num2 = strlen((string)$num1);
	// print $num2;
	return $num2;
};


?>

<div class="pregunta">1. Será necesario crear una función llamada mayor para que al pasarle por parámetro dos variables nos devuelva la que sea mayor.
	<div class="respuesta"><p>Le pasamos los números 15 y el 87</p><p>Resultado:<?php echo mayor(15, 87); ?></p> </div>
</div>
<div class="pregunta">2. Será necesario crear una función llamada multiplicación para que al pasarle por parámetro dos variables nos devuelva la multiplicación de las dos. 
	<div class="respuesta"><p>Probamos la función con los siguientes números: 7 x 8 = <?php echo multiplicacion(7,8); ?></p></div>
	<div class="respuesta"><p>Probamos la función con los siguientes números: 7,1 x 12,2 = <?php echo multiplicacion(7.1,12.2); ?></p></div>
</div>
<div class="pregunta">3. Será necesario crear una función llamada mayorEdad para que al pasarle por parámetro una variable numérica nos devuelva true si es mayor edad o false si es menor de edad.
	<div class="respuesta"><p>Probamos la función con la edad de 7 años y la función nos devuelve: <?php mayorEdad(7);
	if (mayorEdad(7) == 1) {
		echo "True";
	}
	else{
		echo "False";
	}
	 ?></p></div>
	<div class="respuesta"><p>Probamos la función con la edad de 19 años y la función nos devuelve: <?php mayorEdad(19);
	if (mayorEdad(19) == 1) {
		echo "True";
	}
	else{
		echo "False";
	}
	 ?></p></div>
</div>
<div class="pregunta">4. Será necesario crear una función llamada capicúa para que al pasarle una variable numérica nos devuelva true si es capicúa o false si no lo es. 
	<div class="respuesta"><p>Probamos la función con el número 327 y la función nos devuelve: <?php capicua(327);
	if (capicua(327) == 1) {
		echo "True";
	}
	else{
		echo "False";
	}
	 ?></p></div>
	<div class="respuesta"><p>Probamos la función con el número 1331 y la función nos devuelve: <?php capicua(1331);
	if (capicua(1331) == 1) {
		echo "True";
	}
	else{
		echo "False";
	}
	 ?></p></div>
</div>
<div class="pregunta">5. Será necesario crear una función llamada numeroCaracteres para que al pasarle una variable numérica nos devuelva el número de caracteres que tiene.
	<div class="respuesta"><p>Probamos la función con el número 12 y la función nos devuelve: <?php echo numeroCaracteres(12); ?></p></div>
	<div class="respuesta"><p>Probamos la función con el número 125323 y la función nos devuelve: <?php echo numeroCaracteres(125323); ?></p></div>
</div>
</body>
</html>

