<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Variáveis
    $numero = 19;//Valor simulado
    $verificaPrimo = 0;//Variável feita para verificar se o número é primo ou não

    //Saída e lógica 
    echo "<b>PROGRAMA QUE VERIFICA NÚMERO PRIMO</b> <br> <br> <br>";
    echo "Número digitado: $numero. <br> <br>";

    //Lógica de verificação do valor inserido
    if ($numero == 1) {//Caso o número seja 1
        echo "O número 1 só é divisível por 1, não sendo primo.";
    } 
    
    else if ($numero == 0) {//Caso o número seja 0
        echo "O número 0 não é primo.";
    } 
    
    else if ($numero < 0) {//Caso o número seja negativo
        echo "Números negativos não são primos, insira um número positivo.";
    } 

    else if (($numero > 0) && ($numero-floor($numero)!=0)) {//Caso o número seja racional e positivo
        echo "Insira um número inteiro.";
    } 
    
    else {//Caso seja um valor válido
        for ($i = 1; $i <= $numero; $i++) {//Verifica os números de 1 até o digitado e informa os divisores
            if ($numero%$i == 0) {//Caso seja divisível
                echo "O número é divisível por $i.<br>";
                $verificaPrimo++;//Variável de verificação recebe 1
            } else {
    
            }
        };

        if ($verificaPrimo == 2) {//Caso seja primo 
            echo "<br>O número inserido é primo.";
        }

        else {//Caso não seja primo
            echo "<br>O número inserido não é primo.";
        }
    }
    

?>