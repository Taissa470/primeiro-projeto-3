<?php

// Configurações do banco
$host    = "localhost";  
$usuario = "root";        
$senha   = "";            
$banco   = "taissa_tabela";       

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// SENSITIVE CASE suportar acentos e Ç
mysqli_set_charset($conexao, "utf8");
?>
