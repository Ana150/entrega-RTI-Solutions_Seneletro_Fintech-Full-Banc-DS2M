<?php

if(isset($_GET["nome"]) && isset($_GET["salario"]) 
    && isset($_GET["genero"]) && isset($_GET["cargo"])){
    
    $nome = $_GET["nome"];
    $salario = $_GET["salario"];
    $genero = $_GET["genero"];
    $cargo = $_GET["cargo"];
}else{
    echo "ALGO DEU ERRADO!!!!!"
}

if