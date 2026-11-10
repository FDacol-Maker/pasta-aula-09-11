<?php

require_once 'conexao.php';

$sql = "CREATE TABLE IF NOT EXISTS usuarios (
id INT AUTO_increment PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
telefone  VARCHAR (20) UNIQUE NOT NULL,
ativo  BOOLEAN DEFAULT TRUE,
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP

)
";

// PREPARAR O COMANDO SQL
// stmt = STATEMENTE
$stmt = $pdo-> prepare($sql);



//EXECUTAR O COMANDO
$stmt->execute();

//MENSAGEM DE SUCESSO
echo "Successo ao executar o comando!";
?>