<?php
if(isset($_GET["nome"]) && isset($_GET["salario"]) 
    && isset($_GET["genero"]) && isset($_GET["cargo"])){
    
    $nome = $_GET["nome"];
    $salario = $_GET["salario"];
    $genero = $_GET["genero"];
    $cargo = $_GET["cargo"];

    $aumento = 0;
}else{
    echo "ALGO DEU ERRADO!!!!!";
    die;
}

if ($salario > 5000){
    $aumento = $salario * 1.1;
}else{
    $aumento = $salario * 1.2;
}

if($genero == "f"){
    echo "A $nome passará a receber R$ $aumento, no cargo de $cargo";
}elseif($genero == "m"){
    echo "O $nome passará a receber R$ $aumento, no cargo de $cargo";
}else{
    echo "$nome passará a receber R$ $aumento, no cargo de $cargo";
}

number_format($aumento , 2 , "," , ".");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Aumento</title>
</head>
<body>
    <main>
        
    </main>
</body>
</html>


