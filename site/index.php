<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/aa9f4da7e4.js" crossorigin="anonymous"></script>
</head>
<body style="font-family: 'Julius Sans One', sans-serif;color:#000000;background-image: url('img/do.jpg');background-position: center center;background-size: cover;background-attachment: fixed;height:auto;width: 100%">
	<div class="container">
		<div class="row" style="margin-top: 100px;">
			<div class="col-md-6 offset-md-3 mt-5">
				<div class="bg-transparent">
					<div class="card-body">
						<h4 class="card-title">Acesso <i class="fa-solid fa-lock"></i></h4>
						<form action="verificar.php" method="POST">
							<div class="float-end"></div>
                            <br>
                            <br>	
							<div class="mb-3">
								<input type="email" name="email" class="form-control" placeholder="E-mail">
							</div>
							<div class="mb-3">
								<input type="password" name="senha" placeholder="Senha" class="form-control">
							</div>
							   <!--inicio recaptcha -->
							<script 
							 src="https://www.google.com/recaptcha/api.js" async defer>
							</script>
							<div 
								class="g-recaptcha" data-sitekey="6LfqXQ0iAAAAACNc25y4g73cvpq7KcEmiPYbjtUz">
							</div>
							<br>
							<button type="submit"  name="Acessar" style="background-color: #e9e9ff" class="btn btn-info" onclick="return valida()" >Acessar</button>
							<script type="text/javascript">
								function valida(){
									if (grecaptcha.getResponse()=="") {
										alert("É necessário marcar a caixa de validação");
										return false;
									}
								}
							</script>

							<?php 
							     if (isset($_POST['Acessar'])){
							     	
							     	if (!empty($_POST['g-recaptcha-response'])){
							     		
							     		$url = "https://www.google.com/recaptcha/api/siteverify";
							     		$secret = "6LfqXQ0iAAAAABFQwZenaj6keSqltVg_v3LFN6Mu";
							     		$response = $_POST['g-recaptcha-response'];
							     		$variaveis = "secret=".$secret."&response=".$response;

							     		$ch = curl_init($url);
							     		curl_setopt( $ch, CURLOPT_POST, 1);
							     		curl_setopt( $ch, CURLOPT_POSTFIELDS, $variaveis);
							     		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
							     		curl_setopt( $ch, CURLOPT_HEADER, 0);
							     		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
							     		curl_exec($ch);
							     	}
							     }
							 ?>
							 <!--fim recaptcha -->

						</form>
						<br>
						<a 
						href="esqueciMinhaSenha.php"
						style="color: black"
						>Esquecei a senha</a><br>
						<br>
						<a 
						href="cadastrar_login.php"
						style="color: black"
						>Cadastrar</a><br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<div class="position-absolute bottom-0 end -0"> 
	<p class="fw-bolder">Foi feito pelo</p> 
	<p class="fw-bolder">Equipe de Desenvolvimento</a></p>
	</div>
</body>
</html>