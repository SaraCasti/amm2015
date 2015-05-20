<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//Include file nel quale vengono settate le credenziali per la connessione al db
include_once 'Settings.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Esempio modifica nel db</title>
    </head>
    <body>
        <?php
        //creo istanza mysqli
        $mysqli = new mysqli();
        
        //connessione al db
        $mysqli->connect(Settings::$db_host, Settings::$db_user, 
                Settings::$db_psw, Settings::$db_name);
        //Se è avvenuto un errore di connessione
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { //Connessione OK
 
            //Modifica il nome della persona con id=5
            $query = "update persona set nome='Silvia' where id=5";
            //Risultato query di update
            $result = $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
            }
            else
            {
                echo "Modifica andata a buon fine";
            }
        }
        $mysqli->close();
        ?>
    </body>
</html>
