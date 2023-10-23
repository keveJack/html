let paragraphe = document.querySelector("p");
let texte="<ul>";
let nombre=prompt("Ecrire un nombre");

if (nombre<11) {
    for (let i = 1; i < nombre; i++) {
      for (let j = 1; j < i;j++ ) {
        texte += "*"; 
      }
      texte += `</br>`;
    }
} else {
    texte += `<li>un nombre inferieur a 11</li>`; 
}



texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);