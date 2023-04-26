<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-light">


<?php 
  if(isset($_POST['acao'])){
    // Meu form foi enviado?
    // Se sim, vamos validar.

    $nome = strip_tags($_POST['nome']);
    $sobrenome = strip_tags($_POST['sobrenome']);
    $endereco = $_POST['endereco'];

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){
      echo "email inválido!";
    } else {
      $email = $_POST['email'];
      // Passamos na validação e agora vamos inserir no banco de dados.
      $pdo = new PDO('mysql:host=localhost;dbname=formulariophp', 'root', '');
      $sql = $pdo->prepare("INSERT INTO clientes VALUES (null, ?,?,?,?)");
      $sql->execute(array($nome, $sobrenome, $email, $endereco));
      
      echo "<script>window.alert('Dados salvos!');</script>";

    //  $hostname = "localhost";
     // $bancodedados = "formulariophp";
     // $usuario = "root";
     // $senha = "";
     // $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
     // if($mysqli->connect_errno){
     //   echo "Falha na conexão: (". $mysqli->connect_errno. ")". $mysqli->connect_error;
     // }else{
      //  echo "conectado no banco";
       // $sql = $mysqli->prepare("INSERT INTO clientes VALUES (null, ?,?,?,?)");
       // $sql->execute(array($nome, $sobrenome, $email, $endereco));
      // }
      }  
   
  }

?>
    <div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Formulário de cadastro</h2>
      <p class="lead">Neste formulário vamos cadastrar um cliente</p>
      </div>
      <div class="col-md-12">
        <h4 class="mb-3">Informações de Cadastro</h4>
        <form class="needs-validation" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Primeiro nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" name="nome">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" name="sobrenome">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="endereco">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

          <button class="w-100 btn btn-primary btn-lg" name="acao" type="submit">Enviar formulário</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2017–2023 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</body>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-light">


<?php 
  if(isset($_POST['acao'])){
    // Meu form foi enviado?
    // Se sim, vamos validar.

    $nome = strip_tags($_POST['nome']);
    $sobrenome = strip_tags($_POST['sobrenome']);
    $endereco = $_POST['endereco'];

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){
      echo "email inválido!";
    } else {
      $email = $_POST['email'];
      // Passamos na validação e agora vamos inserir no banco de dados.
      $pdo = new PDO('mysql:host=localhost;dbname=formulariophp', 'root', '');
      $sql = $pdo->prepare("INSERT INTO clientes VALUES (null, ?,?,?,?)");
      $sql->execute(array($nome, $sobrenome, $email, $endereco));
      
      echo "<script>window.alert('Dados salvos!');</script>";

    //  $hostname = "localhost";
     // $bancodedados = "formulariophp";
     // $usuario = "root";
     // $senha = "";
     // $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
     // if($mysqli->connect_errno){
     //   echo "Falha na conexão: (". $mysqli->connect_errno. ")". $mysqli->connect_error;
     // }else{
      //  echo "conectado no banco";
       // $sql = $mysqli->prepare("INSERT INTO clientes VALUES (null, ?,?,?,?)");
       // $sql->execute(array($nome, $sobrenome, $email, $endereco));
      // }
      }  
   
  }

?>
    <div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Formulário de cadastro</h2>
      <p class="lead">Neste formulário vamos cadastrar um cliente</p>
      </div>
      <div class="col-md-12">
        <h4 class="mb-3">Informações de Cadastro</h4>
        <form class="needs-validation" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Primeiro nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" name="nome">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" name="sobrenome">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="endereco">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

          <button class="w-100 btn btn-primary btn-lg" name="acao" type="submit">Enviar formulário</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2017–2023 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</body>
>>>>>>> c2b92f3f69208f30c2eb3aaff94fb617ff8e5d2b
</html>