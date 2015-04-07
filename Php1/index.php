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
            
            $cond = 0;
            if($cond==0)
            {
                echo "<p>Cond uguale a 0</p>";
            }
            else
            {
                echo "<p>Cond diverso da 0</p>";
            }
            
        ?>
        <form>
            <select>
            <?php
                for($i=0; $i<10; $i++)
                {
                    ?>
                <option value="<?php echo $i;?>">
                    Valore - <?= $i ?>
                </option>
            <?php
                }
            ?>
            </select>
        </form>
    </body>
</html>
