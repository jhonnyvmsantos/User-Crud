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

  <main id="list-main">
    <div class="list-container">
      <h2>LISTAGEM DE USUÁRIOS</h2>

      <div id="list-content" />

    </div>
  </main>
</body>

<?php
include_once("../database/db.php");

$sql = "SELECT * FROM tbl_user";

$res = mysqli_query($conn, $sql);

if ($res->num_rows > 0) {
  echo "<script> 
    let lContainer = document.getElementById('list-content'); 

    let item, id, info, buttons, h3, h5, p, edit, trash;  
  </script>";

  while ($row = $res->fetch_object()) {
    echo "<script>
      item = document.createElement('div');
      id = document.createElement('div');
      info = document.createElement('div');
      buttons = document.createElement('div');

      h3 = document.createElement('h3');
      p = document.createElement('p');
      h5 = document.createElement('h5');

      edit = document.createElement('img')
      trash = document.createElement('img')

      item.classList.add('list-item');
      id.classList.add('list-id');
      info.classList.add('list-info');
      buttons.classList.add('list-buttons');

      edit.src = '../imgs/edit.png';
      trash.src = '../imgs/trash.png';

      h3.textContent = '$row->user_id';
      h5.textContent = '$row->user_name';
      p.textContent = '$row->user_email';

      id.appendChild(h3);

      info.appendChild(p);
      info.appendChild(h5);

      buttons.appendChild(edit);
      buttons.appendChild(trash);

      item.appendChild(id);
      item.appendChild(info);
      item.appendChild(buttons);

      lContainer.appendChild(item);

    </script>";
  }
}
?>

</html>