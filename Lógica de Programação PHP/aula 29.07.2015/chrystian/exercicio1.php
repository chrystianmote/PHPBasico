<html>
<body>
<font color="blue" style="bold"> APROVADO / REPROVADO / RECUPERAÇÃO </font> <br>
</body>
</html>


<?php
$nota = $_GET["nota"];
echo "<br> A Nota do Moço é:" . $nota ."<br>";

if($nota >= 7)
{
	echo "Aprovado";
}
elseif ($nota >= 5)
{
	echo "Recuperação";
}
else
{
	echo "Reprovado";
}

?>