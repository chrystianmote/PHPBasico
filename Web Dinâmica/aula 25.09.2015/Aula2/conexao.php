<?php
$conexao = mysql_connect("localhost", "root", "");

if (!$conexao) {
    die("Não Houve Conexão com o servidor! " . mysql_error());
}
/* Define o tipo de caracter recebido */
mysql_set_charset("utf8", $conexao);

mysql_select_db("dbescola");
$comando = "SELECT * FROM Aluno";
/* Executa o SQL */
$alunos = mysql_query($comando);

/* Oreganiza o resultado usando como indices o campo do BD */
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>Zebra</title>
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <table  class="table table-striped">
        <tr>
          <th>IDAluno</th>
          <th>Nome Aluno</th>
        </tr>
        <?php
                        while ($array = mysql_fetch_array($alunos)) {

//                if ($array["codigoAluno"] % 2 == 0) {
//                    echo "<tr bgcolor ='#CCC'>";
//                } else {
//                    echo "<tr bgcolor ='#EEE'>";
//                }
                            ?>
        <tr>
          <td><?php echo $array["codigoAluno"]; ?></td>
          <td><?php echo $array["nomeAluno"]; ?></td>
        </tr>
        <?php
                        }
                        ?>
      </table>
    </div>
    <div class="col-md-4"></div>
    <?php
      	mysql_close($conexao);
     ?>
  </div>
</div>
</body>
</html>
