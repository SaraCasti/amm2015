/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var hello="Hello";
var name="Sara";

document.write("<b>"+hello+" "+name+"</b></br>");

var variabile;

variabile = 8;
document.write("Assegno 8, valore della variabile "+variabile+"</br>");

variabile += 2;
document.write("Aggiungo 2, valore della variabile "+variabile+"</br>");

variabile -= 4;
document.write("Sottraggo 4, valore della variabile "+variabile+"</br>");

variabile *= 5;
document.write("Moltiplico per 5, valore della variabile "+variabile+"</br>");

variabile /= 3;
document.write("Divido per 3, valore della variabile "+variabile+"</br>");

variabile++;
document.write("Incremento di 1, valore della variabile "+variabile+"</br>");

variabile--;
document.write("Decremento di 1, valore della variabile "+variabile+"</br>");

var date = new Date();
var m = date.getMonth();

if(m==2){
    document.write("<i>Siamo a Marzo!</i>");
}
else{
    document.write("<i>Non siamo a Marzo!</i>"+m);
}

var mesi = new Array("Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre");

var months = new Array("January", "February", "March", "April", "May", "June", "July", "August","September", "October", "November", "December");

document.write("<ol>")
for(var i in mesi){
    document.write("<li>"+mesi[i]+" corrisponde a "+months[i]+"</li>");
}
document.write("</ol>");

var undef=2;

if(undef == undefined){
    document.write("<h3>La variabile è non definita</h3>");
}
else
{
    document.write("<h3>La variabile è definita</h3>");
}


var sum=0;
for(var j=0; j<100; j++){
    sum +=j;
}

document.write("La somma vale: "+sum+"</br>");