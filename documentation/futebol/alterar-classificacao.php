<?php 
   $id = filter_input(INPUT_GET, 'id');
   $classificacao = filter_input(INPUT_GET, 'classificacao');
   $equipe = filter_input(INPUT_GET, 'equipe');
   $partidas = filter_input(INPUT_GET, 'partidas');
   $jogos = filter_input(INPUT_GET, 'jogos');
   $vitorias = filter_input(INPUT_GET, 'vitorias');
   $empates = filter_input(INPUT_GET, 'empates');
   $derrotas = filter_input(INPUT_GET, 'derrotas');
   
   
   ?>
<?php include('header.php'); ?>
<div class='container'>
   <h3 class='text-center'>Altera dados Cliassificatórios </h3>
   </br>
   <form  action='altClassificacao.php'>
      <div class="row">
         <div class="col-md-3 offset-md-1">
            <input type="hidden" class="form-control" name='id' placeholder="id" value="<?php echo $id ?>"/>
            <label for ='classificacao'> Classificacao 
            <input type="number" class="form-control" name='classificacao' placeholder="classificacao" value="<?php echo $classificacao ?>" required><label>
         </div>
         <div class="col-md-3 offset-md-2">
            <label for ='equipe'> Equipe 
            <input type="text" class="form-control"  name='equipe' placeholder="equipe" value="<?php echo $equipe ?>" required><label>
         </div>
         <div class="col-md-3 offset-md-1">
            <label for ='partidas'> Partidas Ganhas
            <input type="number" class="form-control" name='partidas' placeholder="partidas" value="<?php echo $partidas ?>" required> <label>
         </div>
         <div class="col-md-2 offset-md-1">
            <label for ='jogos'> Jogos
            <input type="number" class="form-control" name='jogos' placeholder="jogos" value="<?php echo $jogos ?>" required><label>
         </div>
      </div>
      <br/>
      <div class="row">
         <div class="col-md-3 offset-md-1">
            <label for ='vitorias'> Vitórias 
            <input type="number" class="form-control" name='vitorias' placeholder="vitorias" value="<?php echo $vitorias ?>"  required><label>
         </div>
         <div class="col-md-3 offset-md-1">
            <label for ='empates'> Empates 
            <input type="number" class="form-control" name='empates' placeholder="empates" value="<?php echo $empates ?>"  required><label>
         </div>
         <div class="col-md-3 offset-md-1">
            <label for ='derrotas'> Derrotas
            <input type="number" class="form-control" name='derrotas' placeholder="derrotas" value="<?php echo $derrotas ?>"  required><label>
         </div>
      </div>
      <div class="col-md-2 offset-md-1">
         <input class="btn btn-success" type='submit'  style='color:white;' value="Alterar" >
      </div>
   </form>
</div>
<br/>
<?php include('footer.php'); ?>