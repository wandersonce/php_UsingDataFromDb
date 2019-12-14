<?php
// Abrir conexao
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "andes";
$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

//testar conexao
if (mysqli_connect_errno()) {
    die("Conexao falhou: " . mysqli_connect_errno());
};
