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
                <input type="radio" name="sesso" id="femmina" value="0" checked/>
                <br/>
                
                <label for="maschio">M</label>
                <input type="radio" name="sesso" id="maschio" value="1"/>
                <br/>
                
                <h3>Scegli categorie:</h3>
                
                <?php
                
                
                $categorie = array("Arte", "Sport", "Musica", "Cinema");
                
                foreach ($categorie as $value) {
                ?>
                
                    <label for="<?=$value?>"><?=$value?></label>
                    <input type="checkbox" name="cat" id="<?=$value?>" value="<?=$value?>"/>
                    <br/>
                    
                <?php 
                }
                ?>        
                 
                <!--
                <label for="arte">Arte</label>
                <input type="checkbox" name="cat" id="arte" value="0"/>
                <br/>
                
                <label for="sport">Sport</label>
                <input type="checkbox" name="cat" id="sport" value="1"/>
                <br/>
                
                <label for="musica">Musica</label>
                <input type="checkbox" name="cat" id="musica" value="2"/>
                <br/>
                
                <label for="cinema">Cinema</label>
                <input type="checkbox" name="cat" id="cinema" value="3"/>
                <br/>
                
                -->
                
                <select name="anno" id="anno">
                    <?php
                        for($i=1900; $i<2015; $i++)
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
            <select name="citta" id="citta" size="3" multiple>
                    <option value="CA">Cagliari</option>
                    <option value="SS">Sassari</option>
                    <option value="NU">Nuoro</option>
                    <option value="OR">Oristano</option>
                    <option value="RO">Roma</option>
                    <option value="FI">Firenze</option>
            </select>

            <br/>
                
                
                
                
            </fieldset>
        </form>
    </body>
</html>
