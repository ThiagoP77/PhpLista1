<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Variáveis
    $m = 20;//Valor simulado de m
    $n = 15;//Valor simulado de n
    
    //Saída do programa
    echo "<b>PROGRAMA QUE CALCULA O FATORIAL DE UM NÚMERO</b>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    if ($n <= $m) {//Se a condição for atentida
        $resultado = combinaMN ($m , $n);//Recebe o retorno da função que calcula combinações

        echo "<b>Valores Digitados</b>";
        echo "<br>";
        echo "Valor de M: $m.";
        echo "<br>";
        echo "Valor de N: $n.";
        echo "<br>";
        echo "<br>";
        echo "<b>Resultados</b>";
        echo "<br>";
        echo "Número de combinações possíveis: $resultado.";
    }

    else {//Se a condição não for atentida
        echo "Digite um valor de N menor ou igual ao de M.";
    }
        

    //Funções
    function fatorial($numero) {//Função que calcula fatorial
        $ni = 1;//Variável do while
        $xi = 1;//Variável utilizada para os cálculos

        while ($ni <= $numero) {//Repete para cada fator
            $resultado = $ni * $xi;
            $xi = $resultado;
            $ni++;//Soma um à variável do while
        }

        return $resultado;//Retorna o resultado ao chamar a função
    }

    function combinaMN ($x , $y) {//Função que calcula o número de combinações
        $fatorialM = fatorial($x);//Calcula o fatorial de m
        $fatorialN = fatorial($y);//Calcula o fatorial de n
        $fatorialMN = fatorial($x - $y);//Calcula o fatorial de m - n
        $resultado = (($fatorialM) / ($fatorialMN * $fatorialN));//Calcula o número de combinações

        return $resultado;//Retorna o resultado ao chamar a função
    }
?>