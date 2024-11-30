<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Variáveis e contas
    $valort1 = 101.53;//Valor total simulado
    $valordividido = $valort1/3;//Valor esperado ao dividir entre os três
    $valorhz1 = floor($valordividido);//Arredondando para baixo o valor
    $amais = 2*($valordividido - $valorhz1);//Diferença paga por Luisinho
    $valorl1 = $valordividido + $amais;//Somando o total pago por Luisinho

    //Formatando as variáveis a serem mostradas com duas casas decimais
    $valort = number_format($valort1,2,",","");
    $valorhz = number_format($valorhz1,2,",","");
    $valorl = number_format($valorl1,2,",","");

    //Saída do programa
    echo "<b>PROGRAMA DE DIVISÃO DE CONTA</b>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Valor total fornecido: R$$valort.";
    echo "<br>";
    echo "<br>";
    echo "Valor pago por Huguinho: R$$valorhz.";
    echo "<br>";
    echo "Valor pago por Zezinho: R$$valorhz.";
    echo "<br>";
    echo "Valor pago por Luisinho: R$$valorl.";
    echo "<br>";

?>