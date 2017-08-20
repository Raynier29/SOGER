<?php

session_start();
	require("conector.php");

	$username=$_POST['user'];
	
	$pass=$_POST['password'];
	$tipo="Gerente";
	$tipo2="Chef";
	


$result = mysqli_query($mysqli,"SELECT * FROM registro_usario WHERE Nombre_usuario='$username'");
   if($row = mysqli_fetch_array($result)){ 
        if($pass==$row['contrasena'] && $tipo==$row['Tipo_usuario']){ 

			echo "<script>location.href='Menu_Gerente.php'</script>";
		
		} elseif($pass==$row['contrasena'] && $tipo2==$row['Tipo_usuario']){
			echo "<script>location.href='Menu_Empleado.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA O NO HA VALIDADO SU CUENTA. REVISE SU CORREO!")</script> ';
			echo $_SESSION['nombre'];
		
			echo "<script>location.href='index.html'</script>";
			
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.html'</script>";	
		

	}

?>
