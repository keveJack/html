
function emoteHumain() {
    return "l'ordinateur observe la personne qui approche";
}
function emoteElfe() {
    return "l'ordinateur observe la personne, totalement subjugé par la grâce elfique";
}
function emoteOrque() {
    return "l'ordinateur observe la personne difforme et repoussante, plissant le nez";
}


function rangRoture() {
    return "Le garde fait un signe de la tête";
}
function rangNoblesse() {
    return "Le garde s'incline respectueusement";
}
function rangRoyauté() {
    return "Le garde, ainsi que toutes les personnes présentes s'inclinent profondément";
}

function getNombreClasse() {
    let classes = document.querySelectorAll('.classe:checked');
    return classes.length;
}

function listerLesClasses() {
    let classes = document.querySelectorAll('.classe:checked');
    let message = "<ul>"
    console.log(classes);
    classes.forEach(classe => {
        message += `<li>${classe.name}</li>>`;
    });
    return message;
}

function saluer(event) {
    event.preventDefault();
    let prenom = document.querySelector('#prenom').value;
    let nom = document.querySelector('#nom').value;
    let message = genererMessage(prenom, nom);
    alert(message);

    let paragrapheClasses = document.querySelector('#classes');
    paragrapheClasses.innerHTML = listerLesClasses();


    let race = document.querySelector('#race').value;
    let emoteRaciale = genererEmoteRacial(race);
    alert(emoteRaciale);


    let rang = document.querySelector('input[name=rank]:checked').value;
    let emoteSociale = genererEmoteSociale(rang);
    alert(emoteSociale);
}
function genererEmoteSociale(rang) {
    let emoteSociale = "";
    switch (rang) {
        case 'roturier':
            emoteSociale = rangRoture();
            break;
        case 'noble':
            emoteSociale = rangNoblesse();
            break;
        case 'royal':
            emoteSociale = rangRoyauté();
            break;


    }
    return emoteSociale;
}

function genererEmoteRacial(race) {
    let emoteRaciale = "";
    switch (race) {
        case 'elf':
            emoteRaciale = emoteElfe();
            break;
        case 'ork':
            emoteRaciale = emoteOrque();
            break;
        default:
            emoteRaciale = emoteHumain();
            break;

    }
    return emoteRaciale;
}

function genererMessage(prenom, nom) {
    let message = "";
    if (prenom.length == 0 && nom.length == 0)
        message = "Bonjour, illustre inconnue(e)";

    else
        message = `Bonjour ${prenom} ${nom}`;
    return message;
}

 function saluerSansAlertes(event){
   event.preventDefault();
   document.querySelector('#error').innerHTML="";
   document.querySelector('#message').style.display='block';
    if((getNombreClasse()==0)||getNombreClasse()>3)
    {
        document.querySelector('#message').style.display='none';
        document.querySelector('#classes').innerHTML="";
        document.querySelector('#error').innerHTML=`Vous ne pouvez pas avoir ${getNombreClasse()}classe(s):entre 1 et 3 maximum`;
        return;
    }
    let message= genererMessageSalutation();
    let emoteRaciale=genererEmoteRacial();
    let emoteSociale=genererEmoteSociale();
    let classes = listerLesClasses();

    document.querySelector('#emotes').innerHTML=`<ul><li>${emoteRaciale}</li><li>${genererEmoteSociale}</li></ul>`;
    document.querySelector('#salutations').innerHTML=message;
    document.querySelector('#classes').innerHTML=classe;
    
    //event.preventDefault();
    //let prenom = document.querySelector('#prenom').value;
    //let nom = document.querySelector('#nom').value;
    //let message = genererMessage(prenom, nom);
    //console.log(message);
    //let race = document.querySelector('#race').value;
    //let emoteRaciale = genererEmoteRacial(race);
    //console.log(emoteRaciale);
    //let rang = document.querySelector('input[name=rank]:checked').value;
    //let emoteSociale = genererEmoteSociale(rang);
    //console.log(emoteSociale);
 }