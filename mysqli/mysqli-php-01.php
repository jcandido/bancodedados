<?php

// Testa a conexão com o banco de dados.
$conn = new mysqli("localhost", $username="root", $passwd="", "dbphp7");
//$conn = new mysqli('localhost', 'root', '', 'dbphp7'); // Também pode ser codificado como neste exemplo 

if ($conn->connect_error) 
{
	echo "Erro na conexão: " . $conn->connect_error;
	exit;
}

// Insere linhas na tabela tb_usuarios no banco de dados dbphp7.
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

//$login = "user";
//$pass = "12345";
//$stmt->execute();

//$login = "root";
//$pass = "67890";
//$stmt->execute();

//$login = "jcandido";
//$pass = "sei lá";
//$stmt->execute();

//$login = "mirian";
//$pass = "15784";
//$stmt->execute();

//$login = "daniela";
//$pass = "56975";
//$stmt->execute();

$login = "wamilson";
$pass = "marinha";
$stmt->execute();

?>
