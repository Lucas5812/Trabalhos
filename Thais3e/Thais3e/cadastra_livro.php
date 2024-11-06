<?php
//Inclue o 'config.php' para se conectar com o banco
include "config.php";

if(!$conn){
    die("erro na conexão". mysqli.connect.error());
}

$Nome = "$post[Nome]";

$Autor = "$post[Autor]";

$Gen = "$post[Genero]";

$Dat_pub = "$post[Dat_pub]";

$sinopse = "$post[Sinopse]";


$sql = "INSERT INTO `livros`
(`Nome`,`Id_autor`, `Id_genero`, `Data_publicacao`,`Sinopse`)
VALUES  
('$Nome', '$Autor', '$Gen', '$Dat_pub', '$sinopse')";


$query = mysqli_query(mysql: $conn,query; $sql) or die(mysqli_error(mysql: $conn));

if($query){
    echo"<center>"
    echo"Cadastro realizado com sucesso"
}