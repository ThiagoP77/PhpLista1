<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Variáveis 
    $n = 6;//Valor simulado de n
    $resultado = calculaE ($n);//Chama a função para calcular o valor da expressão e guarda o valor

    //Saída do programa
    echo "<b>PROGRAMA QUE CALCULA O VALOR DA EXPRESSÃO</b>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<b>Valor Digitado</b>";
    echo "<br>";
    echo "Valor de N: $n.";
    echo "<br>";
    echo "<br>";
    echo "<b>Resultados</b>";
    echo "<br>";
    echo "Resultado aproximado da expressão: $resultado.";

    //Funções
    function calculaE ($n) {//Função que calcula o valor da expressão
        $m = 3;//Recebe o valor de m
        $w = 2;//Variável do while
        $resultado = 0;//Vai receber o resultado

        while ($w <= $n) {//Realiza a soma de cada fator
            $resultado = $resultado + ($w / $m);
            $m = $m + 2;
            $w++;
        }

        $resultadof = number_format($resultado,2,",","");//Formata o resultado para ser mostrado
        return $resultadof;//Retorna o resultado
    }
?>