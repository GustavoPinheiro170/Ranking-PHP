<?php
include_once("futebol/conexao.php");
$posicao = 1;

$consulta  = "SELECT * FROM futebol ORDER BY data DESC";
$resultado = mysqli_query($conexao, $consulta);
?>
<?php
include('header.php');
?>
<div class='container'>
   <h3 class='text-center' style='color: #05517f; '>Inserir Dados tabela Futebol </h3>
   </br>
   <form method='POST' action='futebol/insere.php'>
      <div class="row">
         <div class="col-md-3 offset-md-1">
            <input type="hidden" class="form-control" name='codigo' placeholder="codigo" />
            <label for='data'> Data
               <input type="date" class="form-control" name='data' placeholder="Data" required><label>
         </div>
         <div class="col-md-3 offset-md-2">
            <label for='horario'> Horario
               <input type="text" class="form-control" name='horario' placeholder="Horario" required><label>
         </div>
         <div class="col-md-3 offset-md-1">
            <label for='local'> Local
               <input type="text" class="form-control" name='local' placeholder="Local" required> <label>
         </div>
         <div class="col-md-2 offset-md-1">
            <label for='placar2'> Campo do jogo
               <input type="number" class="form-control" name='campo' placeholder="Campo" required><label>
         </div>
      </div>
      <br />
      <div class="row">
         <div class="col-md-3 offset-md-1">
            <label for='equipe'> Equipe
               <input type="text" class="form-control" name='equipe' placeholder="Equipe" required><label>
         </div>
         <div class="col-md-3 offset-md-1">
            <label for='placar'> Placar
               <input type="number" class="form-control" name='placar' placeholder="Placar" required><label>
         </div>
         X
         <div class="col-md-3 offset-md-1">
            <label for='placar2'> Placar Adversario
               <input type="number" class="form-control" name='placar2' placeholder="Placar" required><label>
         </div>
         <div class="col-md-2 offset-md-1">
            <label for='equipe2'> Equipe Adversaria
               <input type="text" class="form-control" name='equipe2' placeholder="Equipe" required><label>
         </div>
      </div>
      <div class="col-md-2 offset-md-1">
         <input class="btn btn-success" style='color:white;' type='submit' value="SALVAR" />
      </div>

   </form>

   <?php include('futebol/upload.php') ?>





</div>
<br />
<div class='container'>
   <h3 style='color: #05517f;' class='text-center'>Classificação</h3>
   </br>
   <style>
      body {
         font-family: "Montserrat", sans-serif;
      }

      table {
         border: 1px solid gray;
         box-shadow: 2px 4px 1px #888888;
         font-family: "Montserrat", sans-serif;
         text-align: center;
         font-size: 1em;
         background-color: white;
      }

      td {
         margin: 10px;
         padding: 10px;
      }

      tbody {
         margin-left: 10px;
      }
   </style>
   <table class="table table-sm">
      <thead class="thead-dark">
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
         <?php
         while ($row_futebol = $resultado->fetch_array()) {
         ?>
            <tr>
               <td><?php
                     echo date("d/m/y", strtotime($row_futebol["data"]));
                     ?></td>
               <td><?php
                     echo $row_futebol["horario"];
                     ?></td>
               <td><?php
                     echo $row_futebol["local"];
                     ?></td>
               <td><?php
                     echo $row_futebol["equipe"];
                     ?></td>
               <td><?php
                     echo $row_futebol["placar"];
                     ?></td>
               <td><?php
                     echo $row_futebol["placar2"];
                     ?></td>
               <td><?php
                     echo $row_futebol["equipe2"];
                     ?></td>
               <td><?php
                     echo $row_futebol["campo"];
                     ?></td>
               <td><a href=" <?php
                              echo "futebol/deletar.php?codigo=" . $row_futebol['codigo'];
                              ?>" <button class='btn btn-danger'>Apagar</button></a>
               </td>
               <td><a href="<?php
                              echo "futebol/alterarpagina.php?codigo=" . $row_futebol['codigo'] . "&data=" . $row_futebol['data'] . "&local=" . $row_futebol['local'] . "&equipe=" . $row_futebol['equipe'] . "&equipe2=" . $row_futebol['equipe2'] . "&campo=" . $row_futebol['campo'] . "&placar=" . $row_futebol['placar'] . "&placar2=" . $row_futebol['placar2'] . "&horario=" . $row_futebol['horario'];
                              ?>" <button class='btn btn-warning'>Alterar</button></a>
               </td>
            </tr>
         <?php
         }
         ?>
      </thead>
   </table>
</div>
<?php

$consulta  = "SELECT * FROM classificacao ORDER BY partidas DESC ";
$resultado = mysqli_query($conexao, $consulta);

?>

<div class='container'>
   <h3 style='color: #05517f;' class='text-center'>Fase Classificatória</h3>
   </br>
   <style>
      body {
         font-family: "Montserrat", sans-serif;
      }

      table {
         border: 1px solid gray;
         box-shadow: 2px 4px 1px #888888;
         font-family: "Montserrat", sans-serif;
         text-align: center;
         font-size: 1em;
         background-color: white;
      }

      td {
         margin: 10px;
         padding: 10px;
      }

      tbody {
         margin-left: 10px;
      }
   </style>
   <table class="table table-sm">
      <thead class="thead-dark">
         <tr>
            <td scope="col"><strong>Posição</strong></td>
            <td scope="col"><strong>Equipe</strong></td>
            <td scope="col"><strong>Partidas Ganhas</strong></td>
            <td scope="col"><strong>Jogos</strong></td>
            <td scope="col"><strong>Vitorias</strong></td>
            <td scope="col"><strong>Empates</strong></td>
            <td scope="col"><strong>Derrotas</strong></td>
         </tr>
         <?php
         while ($row_classificacao = $resultado->fetch_array()) {
         ?>
            <tr>
               <td><?php echo $posicao; ?>º</td>
               <td><?php
                     echo $row_classificacao["equipe"];
                     ?></td>
               <td><?php
                     echo $row_classificacao["partidas"];
                     ?></td>
               <td><?php
                     echo $row_classificacao["jogos"];
                     ?></td>
               <td><?php
                     echo $row_classificacao["vitorias"];
                     ?></td>
               <td><?php
                     echo $row_classificacao["empates"];
                     ?></td>
               <td><?php
                     echo $row_classificacao["derrotas"];
                     ?></td>
               <td><a href="<?php
                              echo "futebol/alterar-classificacao.php?id=" . $row_classificacao['id'] . "&classificacao=" . $row_classificacao['classificacao'] . "&equipe=" . $row_classificacao['equipe'] . "&partidas=" . $row_classificacao['partidas'] . "&jogos=" . $row_classificacao['jogos'] . "&vitorias=" . $row_classificacao['vitorias'] . "&empates=" . $row_classificacao['empates'] . "&derrotas=" . $row_classificacao['derrotas'];
                              ?>" <button class='btn btn-warning'>Alterar</button></a>
               </td>
            </tr>
         <?php
            $posicao = $posicao + 1; // acumula proxima posicao ate terminar
         } ?>
      </thead>
   </table>
</div>
<?php
include('footer.php');
?>
<script>
   $(function() {
      $('#upload').change(function() {
         const file = $(this)[0].files[0]
         const fileReader = new FileReader()
         fileReader.onloadend = function() {
            $('#img').attr('src', fileReader.result)
         }
         fileReader.readAsDataURL(file)
      })
   })
</script>