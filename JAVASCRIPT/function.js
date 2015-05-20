/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getText(){
    //Recupera nodo textarea
    var node = document.getElementById("mytextarea");
    
    //Recupera testo
    var txt = node.value;
    
    //Crea elemento HTML
    var nodetxt = document.createTextNode(txt);
    
    //Appende l'elemento al DOM
    document.getElementsByTagName("body")[0].appendChild(nodetxt);
}