<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Nanatsu2994');
   define('DB_DATABASE', 'Restaurante');
   
   $mysqli = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die ("Error en la conexion");

 
?>
