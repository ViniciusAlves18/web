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

	  <!-- container -->
	  <div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>Ranking / Clã</h4>
					<table class="table">
						<tr>
							<td><strong>#</strong></td>
							<td><strong>Player</strong></td>
							<td><strong>Rank</strong></td>
						</tr>
						<?php
							for($i=1;$i<=5;$i++){
							echo "<tr>
								  <td>$i</td>
								  <td>Vinicius</td>
								  <td>52</td>
								  </tr>";
						}
						?>
						</table>
				</div>

				<div class="col-md-6">
					<h4>Noticias</h4>
				</div>

			</div>
	  </div>
	  <!-- container -->
	<script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="js/jQuery.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>