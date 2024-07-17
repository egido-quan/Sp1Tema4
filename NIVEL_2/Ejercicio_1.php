<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<body>

<?php
   
    require "ClaseDado.php";
    
    //Declaramos 5 dados que luego tiraremos
    $cincoDados = array();
    for ($i = 0; $i < 5; $i++) {
        $cincoDados[$i] = new PokerDice();
    } 


    for ($i = 0; $i < rand(4, 10); $i++) { // Haremos entre 4 y 10 tiradas de 5 dados
        $tiradas = tirarCincoDados($cincoDados);
        echo "<br>";
        mostrarCaras($cincoDados, $tiradas);
        echo "<br>";
    }


    echo PokerDice::getTotalThrows(); //Mostramos el número total de dados tiradas



    //Tiramos los 5 dados y obtenemos el número de cara
    function tirarCincoDados(array $cincoDados): array {
        $tiradas = array();
        echo "<br>Tiramos 5 dados:<br>";
        echo "Número de cara: ";
        for ($i = 0; $i < count($cincoDados); $i++) {
            $tiradas[] = $cincoDados[$i]->throw();
            echo $tiradas[$i] . " ";
        }    
        return $tiradas;
    }
    //Obtenemos la figura de póker asociada a la cara obtenida en cada dado
    function mostrarCaras(array $cincoDados, array $tiradas): void {
        echo "Figura de la cara: ";
        for ($i = 0; $i < count($tiradas); $i++) {
            echo $cincoDados[$i]->shapeName($tiradas[$i]) . " ";
        }
    }


?>   


</bodY>
</htXl>
