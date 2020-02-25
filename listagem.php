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

   <div class=row>
      <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
        </br>
        </br>
        </br>
   <!--envio ao banco -->    
   <br>
    <center> 
     <h4><small> 
     <div class="btn btn-white btn-outline btn-lg btn-rounded">            
    <?php
    require 'conexao.php';

    mysqli_query($conectar, "SET NAMES 'utf-8';");
    $listagem = mysqli_query($conectar, "SELECT * FROM cliente");

    while ($linha=mysqli_fetch_array($listagem)){
        echo "<br>CPF: ";
        echo ($linha['cpf']); ?>

    <a class=btn btn-danger href="excluir_dados.php?id=<?=$linha['cpf'];?>" role="button"> Excluir </a>
   
    <?php
    echo "<br>Nome: ";
    echo ($linha['nome']);
    echo "<br>Endereço: ";
    echo ($linha['endereco']);
    echo "<br>Data de Cadastro: ";
    echo ($linha['dataCad']);
    echo "<br>Saldo devedor: ";
    echo ($linha['saldoDev']);
    echo "<br>Situação do débito: ";
    echo ($linha['sitDeb']);
    echo "<br>";
    echo "<br>";
    echo "<br>";
       }
    ?>
    </div>
    </small></h4>
<!--fim envio -->
</center>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Listar clientes em atraso" onclick="javascript: location.href='listagem_atraso.php';" />
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Listar clientes em dia" onclick="javascript: location.href='listagem_dia.php';" />
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Voltar a tela principal" onclick="javascript: location.href='index.html';" />
</body>
</html>
