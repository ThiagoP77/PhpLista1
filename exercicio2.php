<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Comandos de fuso, data e hora
    date_default_timezone_set('America/Sao_Paulo');//Determinando o fuso horário
    $data = date('d/m/Y');//Pegando e formatando a data atual
    $horario = date('H:i');//Pegando e formatando a hora atual
    $hora = date('H');//Pegando a hora atual

    //Variáveis utilizadas na lógica
    $horai = $hora;//Variável que recebe a hora atual

    //Saída do programa
    echo "<b>PROGRAMA DE DATA E HORA</b>";
    echo "<br>";
    echo "<br>";
    echo "Data atual: $data.";
    echo "<br>";
    echo "Hora atual: $horario.";
    echo "<br>";
    echo "<br>";

    //Condições de saída
    if (0 <= $horai && $horai <=5) {//Saída para hora entre 0 e 5
        echo "<font color=red>VAI DORMIR ...</font>";
    } 

    else if (5 < $horai && $horai <=11) {//Saída para hora entre 5 e 11
        echo "<font color=lightgreen>BOM DIA</font>";
    } 
    
    else if (11 < $horai && $horai <=17) {//Saída para hora entre 11 e 17
        echo "<font color=yellow>BOA TARDE</font>";
    }
    
    else if (17 < $horai && $horai <=23) {//Saída para hora entre 17 e 23
        echo "<font color=blue>BOA NOITE</font>";
    } 
    
    else {//Saída para hora inválida
        echo "<font color=purple>HORA INVÁLIDA</font>";
    };
    
?>