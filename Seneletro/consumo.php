<?php

if(isset($_GET["consumoHora"]) && isset($_GET["nomeCliente"]) 
    && isset($_GET["endereço"])){
    
    $consumoHora = $_GET["consumoHora"];
    $nomeCliente = $_GET["nomeCliente"];
    $endereço = $_GET["endereço"];
}else{}

if($consumoHora > 120){
    $valor = $consumoHora * 0.42;
}else{
    $valor = $consumoHora * 0.32;
}

echo "Conta de $nomeCliente";
echo "<br><br>";
echo "$endereço";


if($consumoHora > 120){
    echo "<br><br>";
    echo '<div style="color:red">' . "Consumo:" . "<span style='font-size:30px' >$consumoHora kWh</span>" . '</div>';
    echo "<br>";
    echo "Valor a pagar:" . "<span style='font-size:30px' > R$$valor</span>";
}else{
    echo "<br><br>";
    echo '<div style="color:blue">' . "Consumo:" . "<span style='font-size:30px' >$consumoHora kWh</span>" . '</div>';
    echo "<br>";
    echo "Valor a pagar:" . "<span style='font-size:30px' > R$$valor</span>";
    echo "<br><br>";
    echo '<div style="color:blue">' . "OBRIGADO POR ECONOMIZAR!!!!" . '</div>';
}