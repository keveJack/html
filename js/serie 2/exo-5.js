let nombrex= parseInt(prompt("Ecrire un nombre x"));
let nombrey=parseInt(prompt("Ecrire un nombre y"));
let paragraphe = document.querySelector("p");
if ((!isNaN(nombrex))&& (!isNaN(nombrey))) {
    if (nombrex > nombrey) {
        console.log('x est plus grand que y strictement');
    }
    else {
        console.log('x est plus petit ou égal à y ');
        console.log(paragraphe);
        paragraphe.innerHTML = 'x est plus petit ou égal à y ';
    }
}
else {
    console.log('Erreur ecrrire un nombre');
    console.log(paragraphe);
    paragraphe.innerHTML = 'Erreur ecrrire un nombre';
}

