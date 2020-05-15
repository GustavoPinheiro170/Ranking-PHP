<?php 
include_once('conexao.php');

$codigo = $_POST['codigo'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$local = $_POST['local'];
$equipe = $_POST['equipe'];
$placar = $_POST['placar'];
$placar2 = $_POST['placar2'];
$equipe2 = $_POST['equipe2'];
$campo = $_POST['campo'];

$sql = "insert into futebol (data, horario, local, equipe, placar, placar2, equipe2, campo) values ('$data','$horario', '$local', '$equipe', '$placar', '$placar2', '$equipe2', '$campo')";
$salvar = mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Linha apagada com sucesso</p>";
    header("Location: ../template.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>A linha não foi apagada</p>";
    header("Location: ../template.php");
}

mysqli_close($conexao);

?>