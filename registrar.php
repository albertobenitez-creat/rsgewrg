<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['facebook']) >= 1 && strlen($_POST['numero']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $facebook = trim($_POST['facebook']);
	    $numero = trim($_POST['numero']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, facebook, numero, fecha_reg) VALUES ('$name','$email','$facebook','$numero','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>