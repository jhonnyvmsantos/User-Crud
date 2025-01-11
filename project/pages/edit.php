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
include_once("../database/config.php");

$sql = "SELECT * FROM tbl_user WHERE user_id = " . $_REQUEST["id"];

$res = mysqli_query($conn, $sql)->fetch_object();
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

    <main id="edit-main">
        <form action="./list.php?action=edit" method="POST">
            <h3>Editar Usuário</h3>

            <input type="hidden" name="id" value="<?php echo $res->user_id; ?>">

            <div class="edit-input">
                <label>Name</label>
                <br />
                <input required type="text" id="name" name="name" placeholder="Insira seu nome completo..." value="<?php echo $res->user_name; ?>" />
            </div>

            <div class="edit-input">
                <label>Email</label>
                <br />
                <input required type="email" id="email" name="email" placeholder="Insira seu email..." value="<?php echo $res->user_email; ?>" />
            </div>

            <div class="edit-input">
                <label>Password</label>
                <br />
                <input required type="password" id="password" name="password" placeholder="Defina uma senha..." value="<?php echo $res->user_password; ?>" />
            </div>

            <div id="edit-button">
                <button type='submit'>Enviar</button>
            </div>
        </form>
    </main>
</body>

</html>