<?php

include_once("conexao.php");
$posicao = 1;
$consulta  = "SELECT * FROM classificacao ORDER BY partidas DESC";
$resultado = mysqli_query($conexao, $consulta);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="../../assets/css/demo.css" rel="stylesheet" />
<style>
    h1 {
        font-family: "Montserrat", sans-serif;
        font-size: 56px;
        position: absolute;
        z-index: 999999;
        top: 130;
        vertical-align: baseline;
        right: 48%;
        font-weight: 700;
        color: #ffc801;
        margin: 0 0 10px 0px;

    }

    .row {
        margin-left: -20px;
        margin-right: -20px;
        font-size: 0;
    }

    .logo img {
        position: absolute;
        z-index: 99999999;
        right: 80%;
        top: 3%;
        width: 167.33px;
        height: 68.3px;
    }
</style>
<html>

<head>
    <meta charset='utf8'>
    <div class="logo">
        <a href="javascript:;" class="simple-text">
            <img src='../img/logo-azul.png' class='brightness'>
        </a>
    </div>

    <h1>Classificação Futebol</h1>

    <div class='background'>
        <img src='../img/futebol-banner.jpg' alt='capa-futebol' />

    </div>


</head>

<body>
 <div class="container">
   <div class="row">
            <div class="col-sm">
                <h2 class='text-center'>Tabela</h2></br>
                <table class="table table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <td class="table-warning text-center" scope="col"><strong>Classificação</strong></td>
                            <td scope="col"><strong>Equipe</strong></td>
                            <td scope="col"><strong>PG</strong></td>
                            <td scope="col"><strong>J</strong></td>
                            <td scope="col"><strong>V</strong></td>
                            <td scope="col"><strong>E</strong></td>
                            <td scope="col"><strong>D</strong></td>
                        </tr>
                        <?php while ($row_classificacao = $resultado->fetch_array()) { ?>
                            <tr>

                                <td class='text-center' scope="row"><?php echo $posicao; ?>º</td>
                                <td scope="row"><?php echo $row_classificacao["equipe"]; ?></td>
                                <td scope="row"><?php echo $row_classificacao["partidas"]; ?></td>
                                <td scope="row"><?php echo $row_classificacao["jogos"]; ?></td>
                                <td scope="row"><?php echo $row_classificacao["vitorias"]; ?></td>
                                <td scope="row"><?php echo $row_classificacao["empates"]; ?></td>
                                <td scope="row"><?php echo $row_classificacao["derrotas"]; ?></td>
                            </tr>
                        <?php
                            $posicao = $posicao + 1; // acumula proxima posicao ate terminar
                        } ?>
                    </thead>

                </table>
            </div>

            <?php
        $consulta = "SELECT * FROM futebol";
        $resultado = mysqli_query($conexao, $consulta);
?>
            <div class="col-sm">
                <h2 class='text-center'>Jogos</h2></br>
                <table class="table table-sm">
                    <tr>
                        <td scope="col"><strong>Data</strong></td>
                        <td scope="col"><strong>Horario</strong></td>
                        <td scope="col"><strong>Local</strong></td>
                        <td scope="col"><strong>Equipe</strong></td>
                        <td scope="col"><strong>Placar</strong></td>
                        <td scope="col"><strong>Placar</strong></td>
                        <td scope="col"><strong>Equipe</strong></td>
                        <td scope="col"><strong>Campo</strong></td>
                    </tr>
                    <?php while ($row_futebol = $resultado->fetch_array()) { ?>
                        <tr>
                            <td scope="row"><?php echo date("d/m/y", strtotime($row_futebol["data"])); ?></td>
                            <td scope="row"><?php echo $row_futebol["horario"]; ?></td>
                            <td scope="row"><?php echo $row_futebol["local"]; ?></td>
                            <td scope="row"><?php echo $row_futebol["equipe"]; ?></td>
                            <td scope="row"><?php echo $row_futebol["placar"]; ?></td>
                            <td scope="row"><?php echo $row_futebol["placar2"]; ?></td>
                            <td scope="row"><?php echo $row_futebol["equipe2"]; ?></td>
                            <td scope="row"><?php echo $row_futebol["campo"]; ?></td>
                        </tr>
                    <?php } ?>
                </table>


        </div>
    </div>
 </div>
</body>


</html>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>