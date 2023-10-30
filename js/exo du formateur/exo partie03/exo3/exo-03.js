let paragraphe = document.querySelector("p");
let texte="<ul>";
let nombre=prompt("Ecrire un nombre");

if (nombre<11) {
    for (let i = 0; i < nombre; i++) {
      for (let j = 0; j < i;j++ ) {
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