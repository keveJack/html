let paragraphe = document.querySelector("p");
let texte="<ul>";
let nombre=prompt("Ecrire un nombre");
let somme=1

for (let i=1;i<=nombre;i++){
 somme = (somme*nombre);
    texte += `<li> ${i}! ${somme} </li>`; 
}

texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);