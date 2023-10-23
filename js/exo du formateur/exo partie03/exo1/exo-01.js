let paragraphe = document.querySelector("p");
let texte="<ul>";
let nombre=prompt("Ecrire un nombre");

if (nombre<11) {
    for (let i = 0; i < nombre; i++) {
        texte += "*"
        
    }
} else {
    texte += "un nombre inferieur a 11"; 
}



texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);