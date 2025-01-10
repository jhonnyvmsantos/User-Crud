<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
  <script defer src="../script.js"></script>
</head>

<?php

include_once("../database/db.php");

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $sql = "INSERT INTO tbl_user (user_name, user_email, user_password) VALUES ('$name', '$email', '$pass')";
  $result = mysqli_query($conn, $sql);
  
  if ($result == true) {
    echo "<script>alert('Cadastro efetuado com SUCESSO.');</script>";
    echo "<script>window.location.href = 'list.php';</script>";
  } else {
    echo "<script>alert('Não foi possivel cadastrar o usuário...');</script>";
  }
}
?>

<body>
  <div class="navbar">
    <div>
      <h2 id="home-page">USER</h2>
    </div>

    <div class="navbar-menu" id="menu-button">
      <img src="../imgs/menu.png" alt="navbar-menu" />
    </div>

    <nav>
      <ul>
        <li id="list-page">LISTAGEM</li>
        <li id="reg-page">CADASTRO</li>
      </ul>
    </nav>
  </div>

  <main id="register-main">
    <form action="./reg.php" method="POST">
      <h3>Cadastro de Usuário</h3>

      <div class="reg-input">
        <label>Name</label>
        <br />
        <input required type="text" id="name" name="name" placeholder="Insira seu nome completo..." />
      </div>

      <div class="reg-input">
        <label>Email</label>
        <br />
        <input required type="email" id="email" name="email" placeholder="Insira seu email..." />
      </div>

      <div class="reg-input">
        <label>Password</label>
        <br />
        <input required type="password" id="password" name="password" placeholder="Defina uma senha..." />
      </div>

      <div id="reg-button">
        <button type='submit' name="submit" id="submit">Enviar</button>
      </div>
    </form>
  </main>
</body>

</html>