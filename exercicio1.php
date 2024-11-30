<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Valores fixos
    $area = 1000;//Valor simulado para a área
    $valoru = 120.00;//Valor unitário de uma lata de tinta

    //Cálculos
    $litros = $area/3;//Quantidade de litros necessários para a área simulada
    $latasf = $litros/18;//Quantidade de latas de tinta necessárias para a área simulada (sem arredondar)
    $latas = ceil($latasf);//Quantidade de latas de tinta necessárias para a área simulada (arredondada)
    $valort = $latas * $valoru;//Cálculo do valor total a ser pago pelas latas de tinta

    //Formatação
    $valormostrado = number_format($valort,2,",","");//Formatando o valor total para ser mostrado com duas casas decimais

    //Saída do programa
    echo "<b>CÁLCULO DE QUANTIDADE DE LATAS DE TINTA E VALOR TOTAL</b>";
    echo "<br>";
    echo "<br>";
    echo "Quantidade de latas de tinta para uma área de $area"."m²".": $latas.";
    echo "<br>";
    echo "O valor total a ser pago é de: R$$valormostrado."

?>