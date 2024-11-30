<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    //Valores fixos
    $precou = 1.99;//Preço unitário dos produtos
    $maximo = 50;//Máximo de itens a serem comprados

    //Instanciando variáveis
    $precof;//Preço pago pela quantidade desejada
    $precom;//A ser formatada para visualização

    //Saída e lógica
    echo "Lojas Quase Dois - Tabela de preços";
    echo "<br>";
    echo "Preço unitário: R$ 1,99";
    echo "<br> <br>";
    echo "QTD  TOTAL <br>";
    for ($i = 1; $i <= $maximo; $i++) {//Executa até chegar em 50 itens
        $precof = $precou * $i;//Multiplica o preço unitário pela quantidade de itens
        $precom = number_format($precof,2,".","");//Formata o preço a ser mostrado
        echo "$i - R$ $precom. <br>";
    };

?>