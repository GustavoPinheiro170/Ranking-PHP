
<?php

include('conexao.php');

$msg = false; 

if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()). $extensao;
    $diretorio = "futebol/upload/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    $sql_code = "INSERT INTO arquivo (codigo, arquivo , data) VALUES (null, '$novo_nome', NOW())";
    if($conexao->query($sql_code))
        $msg = "Arquivo enviado com sucesso!";
    else
        $msg= "Falha ao enviar arquivo.";
}


?>


<h3 class='text-center' style='color: #05517f; ' >Logotipo Time </h3>



<form action='../documentation/template.php' method='POST' enctype="multipart/form-data">

<?php if($msg !=false) echo "<p> $msg  </p>"; ?>
    <input type='file' name='arquivo' id='upload' required>
      <input type='submit' value='Salvar'>
      <img id="img" style='width: 300px; height: 300px;' />
    </form>

<?php // include_once('footer.php') ?>

<script>
  $(function(){
$('#upload').change(function(){
    const file = $(this)[0].files[0]
    const fileReader = new FileReader()
    fileReader.onloadend = function(){
           $('#img').attr('src' , fileReader.result)
    }
    fileReader.readAsDataURL(file)
        })
  })

</script>

