<html>
<head>
    <meta charset="utf-8">
    <title>AlugaWeb</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="cssbot/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>

<body>
    <div class=login-page>
<br>
<br>
<br>
<br>
   <div class=row>
      <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
        </br>
        </br>
        </br>
   <!--envio ao banco -->    
     <center> 
     <h1><small> 
     <div class="btn btn-white btn-outline btn-lg btn-rounded">            
    <?php
    require 'conexao.php';


    $id= $_GET['id'];

    $sql = ("DELETE FROM cliente WHERE cpf = '$id'");

    mysqli_query($conectar, $sql) or die ('Erro: '.mysqli_error($conectar));

    echo "Excluido com sucesso!"
    ?>
   
    </div>
    </small></h1>
<!--fim envio -->
</center>
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Voltar a tela principal" onclick="javascript: location.href='index.html';" />
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Listar clientes em atraso" onclick="javascript: location.href='listagem.php';" />
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Listar clientes em atraso" onclick="javascript: location.href='listagem_atraso.php';" />
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Listar clientes em atraso" onclick="javascript: location.href='listagem_dia.php';" />

</body>
</html>
