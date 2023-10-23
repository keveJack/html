let paragraphe = document.querySelector("p");
let texte="<ul>";
let i = 1

while (i<10){
    i++;
    if(i%2==0){
    texte += `<li>${i} Est pair </li>`; 
    }
    else{
        texte += `<li>${i} Est impair </li>`; 
    }
}
texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);