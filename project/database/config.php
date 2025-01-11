<?php 
    define('HOST', 'Localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'user_db');

    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    echo "
        <script>
            console.log('Conexão bem-sucedida.');
        </script>
    ";
?>