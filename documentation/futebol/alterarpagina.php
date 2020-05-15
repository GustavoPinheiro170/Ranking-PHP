
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

?>

<?php include('header.php'); ?>

          
            <div class='container'>

                <h3 class='text-center'>Alterar Dados tabela Futebol </h3></br>
                <form  action='alterar.php'>
                  <div class="row">
                    <div class="col-md-3 offset-md-1">
                    <input type="hidden" class="form-control" name='codigo' placeholder="codigo" value="<?php echo $codigo ?>"/>
                        <label for ='data'> Data 
                      <input type="date" class="form-control" name='data' placeholder="Data" value="<?php echo $data ?>" required><label>
                    </div>
                    <div class="col-md-3 offset-md-2">
                    <label for ='horario'> Horario 
                      <input type="text" class="form-control"  name='horario' placeholder="Horario" value="<?php echo $horario ?>" required><label>
                    </div>
                    <div class="col-md-3 offset-md-1">
                    <label for ='local'> Local
                      <input type="text" class="form-control" name='local' placeholder="Local" value="<?php echo $local ?>" required> <label>
                    </div>

                    <div class="col-md-2 offset-md-1">
                    <label for ='placar2'> Campo do jogo
                      <input type="text" class="form-control" name='campo' placeholder="Campo" value="<?php echo $campo ?>" required><label>
                    </div>
                   

                  </div><br/>
                  <div class="row">

                  <div class="col-md-3 offset-md-1">
                    <label for ='equipe'> Equipe 
                      <input type="text" class="form-control" name='equipe' placeholder="Equipe" value="<?php echo $equipe ?>"  required><label>
                    </div>

                    <div class="col-md-3 offset-md-1">
                    <label for ='placar'> Placar 
                      <input type="number" class="form-control" name='placar' placeholder="Placar" value="<?php echo $placar ?>"  required><label>
                    </div> 
                    X
                    <div class="col-md-3 offset-md-1">
                    <label for ='placar2'> Placar Adversario
                      <input type="number" class="form-control" name='placar2' placeholder="Placar" value="<?php echo $placar2 ?>"  required><label>
                    </div>
                    <div class="col-md-2 offset-md-1">
                    <label for ='equipe2'> Equipe Adversaria
                      <input type="text" class="form-control" name='equipe2' placeholder="Equipe" value="<?php echo $equipe2 ?>" required><label>
                    </div>

                  </div>
                  <div class="col-md-2 offset-md-1">
                  <input class="btn btn-success" type='submit'  style='color:white;' value="Alterar" >
                  </div>
                  </form>
                </div><br/>

        
                <?php include('footer.php'); ?>