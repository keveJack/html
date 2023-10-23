let paragraphe = document.querySelector("p");
let texte="<ul>";
let nombre=prompt("Ecrire un nombre");
let totale = 1

for (let i=1;i<=10;i++){
 totale = (i*nombre);
    texte += `<li> ${i} X ${nombre} = ${totale} </li>`; 
}

texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);