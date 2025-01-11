<?php 
    define('HOST', 'Localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'user_db');

    $conn = new mysqli(HOST, USERNAME, PASSWORD);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    } else {
        $sql = "CREATE DATABASE IF NOT EXISTS user_db;";

        mysqli_query($conn, $sql);

        $conn->select_db(DATABASE);

        $sql = "
            CREATE TABLE IF NOT EXISTS tbl_user (
                user_id INT PRIMARY KEY AUTO_INCREMENT,
                user_name VARCHAR(50),
                user_email VARCHAR(100) UNIQUE,
                user_password VARCHAR(100)
            );
        ";

        mysqli_query($conn, $sql);
    }

    echo "
        <script>
            console.log('Conexão bem-sucedida.');
        </script>
    ";
?>