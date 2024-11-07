<?php
//Definindo as informações do banco de dados que vai se conectar(O host, o usuário e a senha, respecticvamente)
$db_host = "localhost";
$db_user = "root";
$db_pass = ""; //não tem senha pois não foi definido nenhuma, provavelmente teria dentro de uma empresa

$db_name = "biblioteca";

//cria uma conexão com o banco de dados usando os parâmetros acima
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


//checa se a conexão foi bem sucedida, caso não, envia um relatório de erro ao usuário
if ($conn->connect_error){
    die("falha na conexão: {$conn->connect_error}");
}
else{
    echo("Conectou-se com sucesso ao banco de dados $db_name");
}