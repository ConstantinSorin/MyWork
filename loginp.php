<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trydb";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login_database WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Autentificare reușită. Bine ați venit, $username , veti fi redirectionat catre pagina principala in cateva secunde!";
    header("refresh:4; url=index.html");
} else {
    echo "Autentificare eșuată. Nume de utilizator sau parolă incorectă.";
    header("refresh:4; url=login.html");
}

$conn->close();
?>