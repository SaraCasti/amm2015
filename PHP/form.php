<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Esempio funzionamento input form</title>
    </head>
    <body>
        <form action="input-form.php" method="POST">
            <fieldset>
                <legend>Registrazione:</legend>
                <label for="usr">Username:</label>
                <br/>
                <input type="text" name="usr" id="usr"/>
                
                <br/>
                
                <label for="usr">Password:</label>
                <br/>
                <input type="password" name="psw" id="psw"/>
                
                
                <br/>
                
                <label for="usr">Email:</label>
                <br/>
                <input type="email" name="email" id="email"/>
                
                
                <h3>Sesso:</h3>
                
                <label for="femmina">F</label>
                <input type="radio" name="sesso" id="femmina" value="F" checked/>
                <br/>
                
                <label for="maschio">M</label>
                <input type="radio" name="sesso" id="maschio" value="M"/>
                <br/>
                
                <h3>Scegli categorie:</h3>
                
                <?php
                
                
                $categorie = array("Arte", "Sport", "Musica", "Cinema");
                
                foreach ($categorie as $value) {
                ?>
                
                    <label for="<?=$value?>"><?=$value?></label>
                    <input type="checkbox" name="cat[]" id="<?=$value?>" value="<?=$value?>"/>
                    
                <?php 
                }
                ?> 
                <br/>
                 
                    
                <h3>Scegli anno nascita:</h3>
                <select name="anno" id="anno">
                    <?php
                        for($i=1910; $i<2015; $i++)
                        {
                            
                    ?>
                    <option value="<?= $i?>"><?= $i ?></option>
                    
                    <?php
                        }
                    ?>
                </select>  
                
            <br/>
            <label for="desc">Inserisci descrizione:</label>
            <br/>
            <textarea name="desc" id="desc" rows="5" cols="20">
                Inserisci descrizione
            </textarea>

            <br/>
            <!-- Selezione multipla -->
            <label for="citta">Scegli le tue città preferite:</label>
            <br/>
            <select name="citta" id="citta[]" size="3" multiple>
                    <option value="CA">Cagliari</option>
                    <option value="SS">Sassari</option>
                    <option value="NU">Nuoro</option>
                    <option value="OR">Oristano</option>
                    <option value="RO">Roma</option>
                    <option value="FI">Firenze</option>
            </select>

            <br/><br/>
            
            <input type="submit" name="submit" value="Invia"/>

            </fieldset>
        </form>
    </body>
</html>
