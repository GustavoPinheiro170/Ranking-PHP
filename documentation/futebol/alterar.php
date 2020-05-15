<?php 

$codigo = filter_input(INPUT_GET, 'codigo');
$data = filter_input(INPUT_GET, 'data');
$horario = filter_input(INPUT_GET, 'horario');
$local = filter_input(INPUT_GET, 'local');
$equipe = filter_input(INPUT_GET, 'equipe');
$placar = filter_input(INPUT_GET, 'placar');
$placar2 = filter_input(INPUT_GET, 'placar2');
$equipe2 = filter_input(INPUT_GET, 'equipe2');
$campo = filter_input(INPUT_GET, 'campo');


include('conexao.php');


$query = mysqli_query($conexao, "UPDATE futebol SET   data='$data', horario='$horario', local='$local', equipe='$equipe', placar='$placar', placar2='$placar2' , equipe2='$equipe2',  campo='$campo' where codigo='$codigo' ;");
if($query){
   header("Location: ../template.php");
}

else{
    die("erro:" . mysqli_error($conexao));
}

?>