<?php
// Configuração do banco de dados

$host = 'localhost';
$db = 'projeto';
$user = 'root';
$pass = 'P@$$w0rd';
$charset = 'utf8mb4';

$dns = "mysql:host=$host;dbname=$db;charset=$charset";

// Criando a conexão com o banco de dados

try{
    $pdo = new PDO($dns, $user, $pass);
    echo "conexão com o bando de dados bem sucedida";
} catch(PDOException $e) {
    echo "erro ao tentar conectar ao banco de dados <p>".$e;
}
?>