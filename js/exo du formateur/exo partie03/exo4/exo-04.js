let paragraphe = document.querySelector("p");
let texte="<ul>";
let reponse=parseInt(prompt("Trouver le nombre entre 1 et 5"));
let tentative=1
let min=1;
let max=5;
let random= parseInt((Math.random()*(max-min)).toFixed(0))+min;
alert(random);
while ((random!=reponse) && (tentative<3)){
    if (reponse<random) {
         reponse=parseInt(prompt("Le nombre est plus grand"));
    }
    else{
        reponse=parseInt(prompt("Le nombre est plus petit"));
    }
    tentative ++;
}
if (random==reponse) {
    texte += `<li> Reussi !</li>`;
} else {
    texte += `<li> Echec !</li>`;
}
paragraphe.innerHTML = texte;
