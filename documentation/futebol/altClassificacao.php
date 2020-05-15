<?php 
include('conexao.php');


$id = filter_input(INPUT_GET, 'id');
$classificacao = filter_input(INPUT_GET, 'classificacao');
$equipe = filter_input(INPUT_GET, 'equipe');
$partidas = filter_input(INPUT_GET, 'partidas');
$jogos = filter_input(INPUT_GET, 'jogos');
$vitorias = filter_input(INPUT_GET, 'vitorias');
$empates = filter_input(INPUT_GET, 'empates');
$derrotas = filter_input(INPUT_GET, 'derrotas');


$query = mysqli_query($conexao, "UPDATE classificacao SET  classificacao='$classificacao', equipe='$equipe', jogos='$jogos', partidas='$partidas', vitorias='$vitorias' , empates='$empates',  derrotas='$derrotas' where id='$id' ;");
if($query){
   header("Location: temp-insere-classificacao.php");
}

else{
    die("erro:" . mysqli_error($conexao));
}

?>


