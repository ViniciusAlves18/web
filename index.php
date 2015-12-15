<?php
	require_once("load/pdo.php");
	$pdo = new pdoclass;
	$pdo->connection();

	global $pdo;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Page Registre</title>

	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="public/css/style.css" />
	
</head>
<body>
	<!-- nav -->
	<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
     	<li><a href="?cmd=home">Home</a></li>
		<li><a href="?cmd=cadastro">Cadastro</a></li>
		<li><a href="?cmd=donwloads">Donwloads</a></li>
		<li><a href="/Forum">Forum</a></li>
     </ul>
     <form class="navbar-form navbar-right" role="search">
       <div class="form-group">
          <input type="text" class="form-control" placeholder="Digite seu login">
          <input type="password" class="form-control" placeholder="Digite sua senha">
       </div>
      <input type="submit" class="btn btn-default btn-sm btn-danger" value="OK"/>
     </form>
     </nav>
     <!-- nav -->
	 <div class="banner"></div>


	<script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="js/jQuery.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>