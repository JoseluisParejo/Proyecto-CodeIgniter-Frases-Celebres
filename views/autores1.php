<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

	<h1>Welcome to CodeIgniter!</h1>

       <h3><i>Frases del autor <?=$unAutor?></i></h3>
       <ul>
       <?php
         echo "<h2>" . $unAutor . "</h2>";
         foreach($frases as $reg) {
                echo "<li>" . $reg['descripcion'] . "</li>";
       }
       ?>
       </ul>
</body>
</html>
