<?php
$texto = $_POST["txtTexto"];
for ($index = strlen($texto); $index > 0; $index--) {
    echo $texto[$index - 1];
}

