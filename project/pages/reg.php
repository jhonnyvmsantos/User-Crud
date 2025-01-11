<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
  <script defer src="../script.js"></script>
</head>

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
    <form action="./list.php?action=create" method="POST">
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
        <button type='submit'>Enviar</button>
      </div>
    </form>
  </main>
</body>

</html>