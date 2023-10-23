let paragraphe = document.querySelector("p");
let texte="<ul>";
let nombre=prompt("Ecrire un nombre");
let totale = 1;
let i = 0;
while(i<10){
    i++;
 totale = (i*nombre);
    texte += `<li> ${i} X ${nombre} = ${totale} </li>`; 
}

texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);