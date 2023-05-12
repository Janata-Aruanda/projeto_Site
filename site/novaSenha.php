<?php
  $token=$_GET['token'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="font-family: 'Julius Sans One', sans-serif;color:#fff;background-image: url('img/cloud2.jpg');background-position: center center;background-size: cover;background-attachment: fixed;height:auto;width: 100%">
  <div class="container">
    <div class="row">
      <div class="col-md-5 offset-md-3 mt-5">
        <div class="bg-transparent">
          <div style="margin-top: 40px" class="card-body">
            <h2 class="card-title"><i class="fa-solid fa-lock-keyhole"></i> Nova senha</h2>
              <br>
              <form action="confirSenha.php" method="POST">
                <input type="hidden" name="token" value="<?php echo $token; ?>">

               <div class="mb-3">
          		  <label>Crie senha</label>
          		  <input onchange="onChange()" type="password" name="senha" class="form-control">
               </div>

               <div class="mb-3">
          		  <label>Confirme a senha</label>
          		  <input onchange="onChange()" type="password" name="novaSenha" class="form-control">
                <br>

                <button id="btn-submit" type="submit" style="background-color: #e9e9ff" class="btn btn-info">Enviar</button>
               <div id="confereSenhas" style="display:none">
                Senhas não conferem
               </div>
               </div>
              </form>
          <script>
            function onChange () {
             const password = document.querySelector('input[name=senha]');
             const confirm = document.querySelector('input[name=novaSenha]');
              if (confirm.value !== password.value) {
               document.querySelector('#btn-submit').disabled = true
               document.querySelector('#confereSenhas').style.display="block"

              } else {
              document.querySelector('#btn-submit').disabled = false
              document.querySelector('#confereSenhas').style.display="none"
              }
            }
          </script>
        </div>
      </div>
     </div>
    </div>
  </div>
</body>
</html>
