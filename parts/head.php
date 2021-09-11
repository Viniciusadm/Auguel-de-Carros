<?php require_once realpath(dirname(__FILE__) . "/../config/config.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/<?= $file ?>.css">
</head>
<body>
<?php if ($file != 'login'): ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">Aluguel de Carros</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/pages/lista.php">Lista de Veículos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/pages/listaAlugados.php">Lista de Alugados</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/pages/novo.php">Novo Veículo</a>
				</li>
			</ul>
			<div class="d-flex me-2">
				<p class="my-auto mx-3">Usuário: <?= $_SESSION['nome'] ?></p>
        		<a href="/../pages/controllers/_logout.php" class="btn btn-primary">Deslogar</a>
     		</div>
			</div>
		</div>
	</nav>
<?php endif; ?>