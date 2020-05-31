<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$textArea = mysqli_real_escape_string($conexao, trim(($_POST['textArea'])));

$sql = "INSERT INTO contato (nome, email, telefone, descricao, data_cadastro) VALUES ('$nome', '$email', '$telefone', '$textArea', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>