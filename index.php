
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
function numeros() {

 valida();
 if ((event.keyCode < 46) || (event.keyCode > 57))
  event.returnValue = false;


}
// validacion de campo no punto principal
function valida(){
	var valida =$('#decimal').val();
	if(valida.charAt(0) == '.'){
		alert('No se puede ingresar como primer parametro el (.)');
location.reload();
}
}
function letras() {
if ((event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}


</script>

<!--definiendo escenario-->
<label>Historia de usuario</label>
<p>
<form action="process.php" method="POST">
	Estudiante de historia ingrese por favor el numero decimal, recuerde que el formulario<br> 
	esta validado solo por caracteres numericos y para definir el decimal lo realiza con la tecla (.).
	<p>
<label>Nombre estudiante de historia</label><input type="text" id="nombre" name="nombre" onkeypress="letras()" /><br>
<label>Numero de paginas a ingresar</label><input type="text" id="decimal" name="decimal" onkeypress="numeros()"/>
<button id="btn">Enviar</button>
</form>