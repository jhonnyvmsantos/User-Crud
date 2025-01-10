<?php 

include_once("./database/db.php");

if (isset($_POST['submit'])) {
    // Obtém os dados enviados pelo formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "INSERT INTO tbl_user (user_name, user_email, user_password) VALUES ('$name', '$email', '$password');");
} else {
    echo "<p>Requisição inválida.</p>";
}

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {

// }


?>