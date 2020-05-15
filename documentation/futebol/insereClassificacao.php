<?php
include_once('conexao.php');

$id = $_POST['id'];
$classificacao = $_POST['classificacao'];
$equipe = $_POST['equipe'];
$partidas = $_POST['partidas'];
$vitorias = $_POST['vitorias'];
$empates = $_POST['empates'];
$derrotas = $_POST['derrotas'];
$jogos = $_POST['jogos'];


$sql = "insert into classificacao (classificacao, equipe, partidas, vitorias, empates, derrotas, jogos) values ('$classificacao','$equipe', '$partidas', '$vitorias', '$empates',  '$derrotas', '$jogos')";
$salvar = mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Linha apagada com sucesso</p>";
    header("Location: temp-insere-classificacao.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>A linha não foi apagada</p>";
    header("Location: '' ");
}

mysqli_close($conexao);

?>