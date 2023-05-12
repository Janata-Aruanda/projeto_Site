<script src="https://kit.fontawesome.com/aa9f4da7e4.js" crossorigin="anonymous"></script>
<h1><i class="fa-solid fa-users"></i>Locais</h1>
<?php
	$sql = "SELECT * FROM local";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table style='background-color:#3d41428f;color:white'class='table '>";
		print "<tr>";
		print "<th>Cidade</th>";
		print "<th>Bairro</th>";
		print "<th>Endereço</th>";
		print "</tr>";		
		while($row = $res->fetch_object()){
			// if($row->tipo=='1'){
			// 	$tipo = 'Administrador';
			// }else{
			// 	$tipo = 'Usuário Comum';
			// }
			// if($row->status=='1'){
			// 	$status = 'Ativo';
			// }else{
			// 	$status = 'Inativo';
			// }
			print "<tr>";
			print "<td>".$row->cidade."</td>";
			print "<td>".$row->bairro."</td>";
			print "<td>".$row->endereco."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}

