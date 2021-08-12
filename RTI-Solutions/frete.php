<?php

if(isset($_GET["cidadeOrigem"]) && isset($_GET["cidadeDestino"]) 
    && isset($_GET["distancia"]) && isset($_GET["quantidade"])){
    
    $cidadeOrigem = $_GET["cidadeOrigem"];
    $cidadeDestino = $_GET["cidadeDestino"];
    $distancia = $_GET["distancia"];
    $quantidade = $_GET["quantidade"];

    
    $valorTotalPedagios = $quantidade * 9.40;

    $valorTotalKM = $distancia * 6;

    $frete = $valorTotalPedagios + $valorTotalKM;

    echo "A viagem de $cidadeOrigem à $cidadeDestino irá custar o valor de";
    echo "<span style='font-size:30px' > R$$frete</span>";
}else{}