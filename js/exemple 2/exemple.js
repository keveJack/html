let nombre = (Math.random() * 10).toFixed(0);
console.log(nombre);
let paragraphe = document.querySelector("p");
console.log(paragraphe);
paragraphe.innerHTML = nombre;