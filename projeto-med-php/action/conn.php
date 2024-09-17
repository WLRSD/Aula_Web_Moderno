<?php 

$server = 'localhost';
$user = 'root';
$pass = '';
$database = '';

$conn = new mysqli($server, $user, $pass, $database);

if(!$conn){
    die('Erro na conexão!');
}
