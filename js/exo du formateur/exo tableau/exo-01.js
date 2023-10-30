let paragraphe = document.querySelector("p");
let texte="<ul>";
let nomtableau=[1,2,3];
let i =0
for (let nomtableau= 0; nomtableau[i] < nomtableau[3]; i++) {
nomtableau[i]= nomtableau[i*2];
    
}

texte += `<li></li>`; 

texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);
console.log(nomtableau);