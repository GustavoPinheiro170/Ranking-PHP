<?php 
   include_once("conexao.php");
   $posicao = 1;
   $consulta = "SELECT * FROM classificacao ORDER BY partidas DESC";
   $resultado = mysqli_query($conexao , $consulta);

   
   ?>

<?php include('header.php'); ?>
<div class='container'>
   <h3 class='text-center'>Altera dados Classificatórios </h3>
   </br>
   <form method='POST' action='insereClassificacao.php'>
      <div class="row">
         <div class="col-md-3 offset-md-1">
         <input type="hidden" class="form-control" name='posicao' placeholder="posicao"/>
            <input type="hidden" class="form-control" name='id' placeholder="id"/>
            <label for ='classificacao'> Classificacao 
            <input type="number" class="form-control" name='classificacao' placeholder="classificacao"  required><label>
         </div>
         <div class="col-md-3 offset-md-2">
            <label for ='equipe'> Equipe 
            <input type="text" class="form-control"  name='equipe' placeholder="equipe"  required><label>
         </div>
         <div class="col-md-3 offset-md-1">
            <label for ='partidas'> Partidas Ganhas
            <input type="number" class="form-control" name='partidas' placeholder="partidas"  required> <label>
         </div>
         <div class="col-md-2 offset-md-1">
            <label for ='jogos'> Jogos
            <input type="number" class="form-control" name='jogos' placeholder="jogos"  required><label>
         </div>
      </div>
      <br/>
      <div class="row">
         <div class="col-md-3 offset-md-1">
            <label for ='vitorias'> Vitórias 
            <input type="number" class="form-control" name='vitorias' placeholder="vitorias"   required><label>
         </div>
         <div class="col-md-3 offset-md-1">
            <label for ='empates'> Empates 
            <input type="number" class="form-control" name='empates' placeholder="empates"  required><label>
         </div>
         <div class="col-md-3 offset-md-1">
            <label for ='derrotas'> Derrotas
            <input type="number" class="form-control" name='derrotas' placeholder="derrotas"  required><label>
         </div>
      </div>
      <div class="col-md-2 offset-md-1">
         <input class="btn btn-success" type='submit'  style='color:white;' value="Salvar" >
      </div>
   </form>
</div>
<br/>
<div class='container'>
   <h3 style='color: #05517f;' class='text-center' >Fase Classificatória</h3>
   </br>
   <style>
      body{
      font-family: "Montserrat", sans-serif;
      }
      table{
      border: 1px solid gray;
      box-shadow: 2px 4px 1px #888888;
      font-family: "Montserrat", sans-serif;
      text-align: center;
      font-size: 1em;
      background-color: white;
      }
      td{
      margin:10px;
      padding:10px;
      }
      tbody{
      margin-left:10px;
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
         <?php while($row_classificacao = $resultado->fetch_array()) {?>
         <tr>
           
            <td><?php echo $posicao; ?>º</td>
            <td><?php echo $row_classificacao["equipe"]; ?></td>
            <td><?php echo $row_classificacao["partidas"]; ?></td>
            <td><?php echo $row_classificacao["jogos"]; ?></td>
            <td><?php echo $row_classificacao["vitorias"]; ?></td>
            <td><?php echo $row_classificacao["empates"]; ?></td>
            <td><?php echo $row_classificacao["derrotas"]; ?></td>
            <td><a href="<?php echo "alterar-classificacao.php?id=" . $row_classificacao['id'] . "&classificacao=" . $row_classificacao['classificacao'] . "&equipe=" . $row_classificacao['equipe'] .  "&partidas=" . $row_classificacao['partidas'] .  "&jogos=" . $row_classificacao['jogos'] .  "&vitorias=" . $row_classificacao['vitorias'] .  "&empates=" . $row_classificacao['empates'] .  "&derrotas=" . $row_classificacao['derrotas'] ?>"<button class='btn btn-warning'>Alterar</button></a>
            </td>
         </tr>
         <?php
          $posicao = $posicao + 1; // acumula proxima posicao ate terminar
          } ?>
      </thead>

   </table>
</div>
<?php include('footer.php'); ?>