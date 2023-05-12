<?php
	if(!isset($_SESSION)) session_start();
	if(!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))){
		header('Location: index.php');
		exit();
	}

	include('config.php');

	$email =  $_POST['email'];
	$senha =  $_POST['senha'];
	
	$query = "SELECT id, nome, email, senha FROM usuarios WHERE email ='{$email}' AND senha = md5('{$senha}')";

	$res = mysqli_query($conn, $query);

	$row = mysqli_num_rows($res);

	// $res = $conn-> prepare($quer);
	// $res -> bindParam('email', $email);
	// $res -> bindParam('senha', $senha);
	// $res -> execute();

	$row = $res->fetch_object();

	if($res->num_rows > 0){
		$_SESSION['nome'] = $row->nome;
		$_SESSION['id'] = $row->id;
		print "<script>location.href='index2.php';</script>";
	}else{
		print "<script>alert('Usuário e/ou Senho incorretos');</script>";
		print "<script>location.href='index.php';</script>";
	}