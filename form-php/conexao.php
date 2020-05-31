<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'form_php');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
if (!$conexao) {
    header('Location: cadastro.php');
    $_SESSION['conexao_inexiste'] = true;
    exit;
    //die('Não conectado : ' . mysqli_error($conexao));
}
 