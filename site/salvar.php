<?php
include("config.php");
switch ($_REQUEST['acao']) {
	case 'cadastrar':
		$sql = "INSERT INTO usuarios
						(nome, email, senha)
					VALUES
						('" . $_POST['nome'] . "',
						'" . $_POST['email'] . "',
						'" . md5($_POST['senha']) . "'
						)";
		$res = $conn->query($sql);
		if ($res == true) {
			print "<script>alert('Cadastrou com sucesso');</script>";
			print "<script>location.href='index.php';</script>";
		} else {
			print "<script>alert('Não foi possível cadastrar');</script>";
			print "<script>location.href='index.php';</script>";
		}
		break;
	case 'editar':
		if ($_POST['senha'] != "") {
			$lm = "senha='" . md5($_POST['senha']) . "',";
		} else {
			$lm = "";
		}
		$sql = "UPDATE usuarios SET
						nome='" . $_POST['nome'] . "',
						email='" . $_POST['email'] . "',
						tipo='" . $_POST['tipo'] . "',
						" . $lm . "
						status='" . $_POST['status'] . "'
					WHERE
						id=" . $_POST['id'];

		$res = $conn->query($sql);
		if ($res == true) {
			print "<script>alert('Editou com sucesso');</script>";
			print "<script>location.href='index2.php';</script>";
		} else {
			print "<script>alert('Não foi possível editar');</script>";
			print "<script>location.href='index2.php';</script>";
		}
		break;
	case 'excluir':
		$sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];
		$res = $conn->query($sql);
		if ($res == true) {
			print "<script>alert('Excluiu com sucesso');</script>";
			print "<script>location.href='?page=listar';</script>";
		} else {
			print "<script>alert('Não foi possível excluir');</script>";
			print "<script>location.href='?page=listar';</script>";
		}
		break;
}