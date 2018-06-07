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

       <h3><i>Autores de Frases Célebres </i></h3>
       <?php foreach($autores as $reg) {
                echo "<p>" . $reg['nombre'] . "</p>";
                echo "<p><a href=" . "\"" . site_url('welcome/autores/' . $reg['id']) . "\"" .  ">View frases</a></p>";
       }
       ?>
       
</body>
</html>
