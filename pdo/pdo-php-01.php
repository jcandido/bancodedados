<?php
// Faz leitura na tabela tb_usuarios do banco dbphp7 com recuros PDO

$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", $username = "root", $passwd = "");
//$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", ""); // Também pode ser codificado como neste exemplo

$comando = $conexao->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$comando->execute();

$resultados = $comando->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultados as $linha)
{
    foreach ($linha as $chave => $valor)
    {
        echo "<strong>".$chave.":</strong>".$valor."<br/>";
    }
    echo "=========================================================<br>";
}

$var = new PDO("mysql:dbname=dbphp7; host=localhost", $username = "root", $passwd = "");

?>
