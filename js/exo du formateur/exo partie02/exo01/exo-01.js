let paragraphe = document.querySelector("p");
let texte="<ul>";


for (let i=1;i<=10;i++){
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