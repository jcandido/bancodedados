<?php
// Faz leitura em na tabela tb_usuarios no banco de dados dbphp7.

$conexao = new mysqli("localhost", $username="root", $passwd="", "dbphp7");
//$conexao = new mysqli('localhost', 'root', '', 'dbphp7'); // localhost = endereço do banco - root = usuario - '' = senha - dbphp7 = nome do banco de dados
															// Também pode ser codificado como neste exemplo
if ($conexao->connect_error) // testa a conexão
{
	echo "Erro: " . $conexao->connect_error;
	exit;
}

$resultado = $conexao->query("SELECT * FROM tb_usuarios ORDER BY deslogin"); // Faz leitura na tabela tb_usuarios

$dados = array();	// Atribui para a variavel $dados função de array

while ($linha = $resultado->fetch_array())	// Continua lendo a tabela tb_usuarios enquanto houver linhas
{
	array_push($dados, $linha);	// Inclui as linhas lidas da tabela tb_usuarios num array
//	var_dump($linha);	// Exibe no navegador as linhas lidas da tabela tb_usuarios
}

echo json_encode($dados);	// Converte as linhas lidas da tabela tb_usuarios para o formato do JSON


// O bloco de código abaixo é uma alternativa ao bloco acima com while para leitura na tb_usuarios.
/* foreach ($resultado as $linha)
{
    foreach ($linha as $chave => $valor)
    {
        echo "<strong>".$chave.":</strong>".$valor."<br/>";
    }
    echo "=========================================================<br>";
}
 */

?>
