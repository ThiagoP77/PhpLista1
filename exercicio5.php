<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Variáveis iniciais
    $x1 = 1;//Primeiro número
    $x2 = 1;//Segundo
    $x3;//Variável instânciada
    $n = 3;//Variável do While

    //Saída e lógica
    echo "<b>PROGRAMA QUE MOSTRA A SEQUÊNCIA DE FIBONACCI</b>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "1° número - $x1 <br> 2° número - $x2 <br>";//Mostra os dois primeiros números

    while ($n <= 100) {//Lógica e saída dos demais números
        $x3 = $x1 + $x2;//Soma os dois anteriores
        echo "$n"."° número - $x3 <br>";//Mostra o novo valor
        $x1 = $x2;//Troca o valor
        $x2 = $x3;//Troca o valor
        $n++;//Soma um à variável do While
    };

?>