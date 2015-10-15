<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aula PHP</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  .jumbotron{
	 width:40%;
	 margin:0 auto;  
  }
</style>
</head>
<body>
<?php
  require("menu.php");
?>
<div class="container">
  <div class="jumbotron">
<form method="post" action="checarLogin.php" id="formlogin" name="formlogin" >   <fieldset id="fie"> <legend>AREA RESTRITA</legend><br /> 
    <label>USUARIO : </label>
    <input type="text" name="login" id="login" class="form-control" /><br /> 
    <label>SENHA :</label> 
    <input type="password" name="senha" id="senha" class="form-control"/><br /> 
    <input type="submit" class="btn btn-info" value="LOGAR	" /> 
  </fieldset> 
</form>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>
</html>