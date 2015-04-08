<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prova Php</title>
    </head>
    <body>
        <?php
        // put your code here
            echo "Hello Php";
            echo "<h1>Titolo h1</h1>";
            
            //Stampa
            $cond = 0;
            if($cond==0)
            {
                echo "<p>Cond uguale a $cond</p>";
            }
            else
            {
                echo "<p>Cond diverso da zero - $cond</p>";
            }
            
        ?>
        <form>
            <select>
            <!-- Possono essere aggiunte un numero arbitrario di porzioni di
                 codice php nel file. Queste vengono utizzate per le sole parti 
                 che devono essere generate dinamicamente nel documento: 
                 (nell'esempio la stampa della variabile $i 10 volte) -->
                 
            <?php
                for($i=0; $i<10; $i++)
                {
                    ?>
                <option value="<?php echo $i;?>">
                    Valore - <?= $i ?> <!-- Sintassi alternativa per la stampa di $i -->
                </option>
            <?php
                }
            ?>
            </select>
        </form>
    </body>
</html>
