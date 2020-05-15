<?php 
session_start();
include_once('conexao.php');
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$deletar = "DELETE FROM futebol WHERE codigo='$codigo'";
$resultado_delet = mysqli_query($conexao, $deletar);
if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Linha apagada com sucesso</p>";
    header("Location: ../template.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>A linha não foi apagada</p>";
    header("Location: ../template.php");
}

?>