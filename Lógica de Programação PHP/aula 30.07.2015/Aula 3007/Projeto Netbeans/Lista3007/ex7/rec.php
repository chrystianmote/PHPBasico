<?php
if (!empty($_POST["tempF"])) {

    $tempC = ($_POST["tempF"]-32)/9 * 5;
    
    ?>

    <table>
        <tr>
            <td>Temperatura em Fahrenheit:</td>
            <td><b><?php echo $_POST["tempF"]; ?> F</b></td>        
        </tr>
        <tr>
            <td>Temperatura em Celsius:</td>
            <td><b><?php echo $tempC;  ?> °C</b></td>
        </tr>
        

    </table>

    <?php
} else {
    echo "<h2><font color='red'>Valor inválido</font></h2>";
}