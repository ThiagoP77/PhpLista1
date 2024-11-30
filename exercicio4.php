<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Valores fixos
    $popAi = 80000;//Populção inicial de A
    $taxaA = 3/100;//Taxa de A
    $popBi = 200000;//Populção inicial de B
    $taxaB = 1.5/100;//Taxa de B

    //Variáveis utilizadas na lógica
    $anos = 0;
    $popA = $popAi;
    $popB = $popBi;

    //Lógica
    while ($popA < $popB) {//Excuta até a população de A superar a de B
        $popA = $popA + ($taxaA * $popA);//Soma a taxa à população de A
        $popB = $popB + ($taxaB * $popB);//Soma a taxa à população de B
        $anos++;//Soma um ano
    };

    //Saída do programa
    echo "<b>PROGRAMA QUE CALCULA POPULAÇÃO DE PÁIS</b>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "População inicial de A: $popAi.";
    echo "<br>";
    echo "População inicial de B: $popBi.";
    echo "<br>";
    echo "<br>";
    echo "Anos necessários para a população do país A alcançar a de B: $anos anos.";
    echo "<br>";
    echo "<br>";
    echo "População final de A: $popA.";
    echo "<br>";
    echo "População final de B: $popB.";

?>