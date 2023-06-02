<?php
	if (!isset($_SESSION)) session_start();
    
	if (!isset($_SESSION['nome'])){      
	    session_destroy();
	    header("Location: index.php"); exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index2</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/aa9f4da7e4.js" crossorigin="anonymous"></script>
</head>
<body style="font-family: 'Julius Sans One', sans-serif;color:#ffff;background-image: url('img/deo.jpg');background-position: center center;background-size: cover;background-attachment: fixed;height:auto;width: 100%">
	<nav class="navbar navbar-expand-lg " style="background-color: #9ca8ad;">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><img src="img/Donation.jpg" alt='logo' style="width:50px;"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="navbarNav" href="?page=inicio"><i class="fa-solid fa-house" style='color: white'></i>Home </a>
	        </li>
			<li class="nav-item">
	          <a class="nav-link" href="?page=listar"><i class="fa-solid fa-location-pin" style='color: white'></i></i>Locais</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="?page=cadastrar"><i class="fa-solid fa-user-plus" style='color: white'></i>Doação</a>
	        </li>
			<li class="nav-item">
	          <a class="nav-link" <?php print "href='?page=editar&id=".$_SESSION['id']."'";?>><i class="fa-sharp fa-solid fa-list" style='color: white'></i>Editar Usuário</a>
	        </li>
	      </ul>
	   </div>
        <div class="float-end">
        	Olá <b><?php echo $_SESSION['nome']; ?>!</b>
        	<a href="logout.php" class="btn btn-secondary" ><i class='fas fa-running fa-lg'></i><br/></a>
        </div>	      
	</nav>
	<div class="container">
		<div class="row">
			<div class="col mt-5">
				<?php
					//conexão com banco de dados
					include("config.php");

					//include das páginas
					switch (@$_REQUEST['page']) {
						case 'inicio':
							include('inicio.php');
							break;
						case 'cadastrar':
							include('cadastrar.php');
							break;
						case 'editar':
							include('editar.php');
							break;
						case 'listar':
							include('listar.php');
							break;
						case 'salvar':
							include('salvar.php');
							break;
						case 'recupSenha':
							include('recupSenha.php');
							break;							
						default:
							print "<h1><p style='font-size:1.4em'></p>Bem-vindo ao <b>Helping Hands!</b></h1>";
					}
				?>				

			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>