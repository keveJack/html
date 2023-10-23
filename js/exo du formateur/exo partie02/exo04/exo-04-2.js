let paragraphe = document.querySelector("p");
let texte="<ul>";
let x=prompt("Ecrire un nombre");
let y=prompt("puissance ?");
let i = 1;
let totale = 1;
while(i<y){
    i++
 totale = totale*x;
}
texte += `<li> ${y} ^ ${totale} </li>`;
texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);