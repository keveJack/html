let x = parseInt(prompt('Saisir un nombre svp'));
if (!isNaN(x)) {
    if (x > 5) {
        console.log('x est plus grand que 5 strictement');
    }
    else {
        console.log('x est plus petit ou égal à 5 ');
    }
}
else {
    console.log('je veux un NOMBRE WESH');
}
