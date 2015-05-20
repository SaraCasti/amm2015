<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
        // put your code here
            $a = 0;
            $b = 0;
            if(isset($_REQUEST['a']) && isset($_REQUEST['b']) 
                    && isset($_REQUEST['operazione']))
            {
                $operazione = $_REQUEST['operazione'];
                $a = filter_var($_REQUEST['a'], FILTER_VALIDATE_INT);
                        
                $b = filter_var($_REQUEST['b'], FILTER_VALIDATE_INT);
                if($a && $b)
                {
                    switch ($operazione) {
                        case 0:
                            $risultato = $a + $b;
                            echo "$a + $b = $risultato";
                            break;

                        case 1:
                            $risultato = $a - $b;
                            echo "$a - $b = $risultato";
                        default:
                            break;
                        
                        case 2:
                            $risultato = $a * $b;
                            echo "$a * $b = $risultato";
                        default:
                            break;
                        case 3:
                            $risultato = $a / $b;
                            echo "$a / $b = $risultato";
                        default:
                            break;
                    }
                }
            }
        ?>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="esercizio1.php" method="POST">
            <label for="a">Operando a:</label>
            <input type="text" id="a" name="a" value="<?= $a ?>"/>
            <br/>
            <label for="b">Operando b:</label>
            <input type="text" id="b" name="b" value="<?= $b ?>"/>
            <br/>
            <h3>Operazione</h3>
            <select name="operazione">
                <option value="0">Addizione </option>
                <option value="1">Sottrazione </option>
                <option value="2">Moltiplicazione </option>
                <option value="3">Divisione </option>
            </select>
            
            <input type="submit" value="Calcola"/>
        </form>
        
    </body>
</html>
