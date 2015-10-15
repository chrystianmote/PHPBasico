<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SYSEscola</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><img src="images/home32.png" height="24" width="24">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/users_24.png" height="24" width="24">Aluno
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cadastrar_aluno.php">Cadastrar</a></li>
            <li><a href="listarAluno.php">Listar</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/sign_up32.png" height="24" width="24">Matrícula
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cadastrarMatricula.php">Cadastrar</a></li>
            <li><a href="consultarMatricula.php">Consultar</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/catalog24.png" height="24" width="24">Curso
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cadastrar</a></li>
            <li><a href="#">Listar</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/man1-24.png" height="24" width="24">Professor
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cadastrar</a></li>
            <li><a href="#">Listar</a></li>
          </ul>
        </li>
        <li><a href="logout.php"><img src="images/lock.png" height="24" width="24" />Sair</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php

?>