<?php

    /* 
        Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual número mais se repetiu e quantas vezes ele se repetiu.

            Exemplo

            Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
            O número que mais se repete é o 2. 
            Ele se repete 4 vezes
    */
    function arrayAleatorio()
    {
        $arr = [];
        for($i = 0; $i < 20; $i++)
        {
            array_push($arr,rand(0,10));
            
        }
        
        $maior = 0;
        $posicao = "";
    

        for($i = 0; $i < count($arr); $i++)
        {
            $count = 0;
            
            for($j = 0; $j < count($arr); $j++)
            {
                if($arr[$i] == $arr[$j])
                {
                    $count++;                    
                }
                
                if($count > $maior)
                    {
                        $maior = $count;
                        $posicao = $arr[$i];
                    }

                
            }
        
        }

        print_r($arr);
        

        
        return ("O maior numero foi " . $posicao . " e ele Repetiu " . $maior . " vezes" . PHP_EOL);;
    }

    print_r(arrayAleatorio());