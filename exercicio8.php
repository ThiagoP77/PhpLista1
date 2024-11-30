<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Variáveis
    $numero = 10;//Valor simulado
    $resultado = fatorial($numero);//Chama a função de calcular variável e guarda o valor
    
    //Saída do programa
    echo "<b>PROGRAMA QUE CALCULA O FATORIAL DE UM NÚMERO</b>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Número digitado: $numero.";
    echo "<br>";
    echo "<br>";
    echo "Resultado: $resultado.";

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
?>