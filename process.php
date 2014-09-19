<?php

echo'<script type="text/javascript">
    function volver(){
        window.location = "index.php";
    }
</script>';
//validaciones
if($_POST['decimal'] == '.'){
echo'No se Puede enviar (.) solo, debe ingresar los numeros de paginas de lectura';
echo '<br>';
	echo '<button onclick="javascript:volver()" >Volver</button>';
exit ();
}else if(empty($_POST['decimal'])){
echo'No se Puede enviar parametros vacios';
echo '<br>';
	echo '<button onclick="javascript:volver()" >Volver</button>';
exit ();
}else if(empty($_POST['nombre'])){
echo'Falta el nombre del estudiante';
echo '<br>';
	echo '<button onclick="javascript:volver()" >Volver</button>';
exit ();
}

//nombre del estudiante
$nombrEstudiante = $_POST['nombre'];

// valor
$recibe = $_POST['decimal'];
// convertir cadena a array
$fracciones = explode('.',$recibe);

$entero = $fracciones[0];
$decimal = $fracciones[1];

if(empty($decimal)){
	$valor =  'entero';
	$espacio = ' ';
} else{
	$valor = 'decimal';
	$espacio = ',';
}

// arreglos de numeros romanos
$romanosUnidades=array("","I","II","III","IV","V","VI","VII","VIII","IX");
$romanosDecimales = array("","X","XX","XXX","XL","L","LX","LXX","LXXX","XC");
$romanosCentenas = array("","CC","CC","CCC","CD","D","DC","DCC","DCCC","CM");
$romanosMiles = array("","M","MM","MMM");
$numberos= array("1000","100","10");


	$a = $entero/$numberos[0];
	$b = ($entero%$numberos[0])/$numberos[1];
	$c =  (($entero%$numberos[0])%$numberos[1])/$numberos[2];
	$d =  (($entero%$numberos[0])%$numberos[1])%$numberos[2];
	$e = $decimal/$numberos[0];
	$f = ($decimal%$numberos[0])/$numberos[1];
	$g =  (($decimal%$numberos[0])%$numberos[1])/$numberos[2];
	$h =  (($decimal%$numberos[0])%$numberos[1])%$numberos[2];

	// se traen arreglos de numeros romanos
	$a1 = $romanosMiles[$a];
	$b2 = $romanosCentenas[$b];
	$c3 = $romanosDecimales[$c];
	$d4 = $romanosUnidades[$d];
	$e5 = $romanosMiles[$e];
	$f6 = $romanosCentenas[$f];
	$g7 = $romanosDecimales[$g];
	$h8 = $romanosUnidades[$h];


//immpresion final al estudiante.
	echo '<p><h4>Para agilizar sus lecturas estudiante '.$nombrEstudiante.'</h4></p>';
	echo 'El numero romano es: '.$a1.$b2.$c3.$d4.$espacio.$e5.$f6.$g7.$h8.'<br>El numero '.$valor.' es: '.$recibe;
	echo '<br><br>';
	echo '<button onclick="javascript:volver()" >Volver</button>';



?>