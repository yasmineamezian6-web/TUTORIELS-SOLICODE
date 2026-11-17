function calculerMoyenne(notes) {
    let somme = 0;
    for (let i =0; i < notes.length; i++) {
        somme += notes[i];
    }
    return somme / notes.length;
}

let groupA = [12, 14, 16];
let groupB = [10, 18, 11, 13];

console.log("Moyenne de gourpA : " +calculerMoyenne(groupA));
console.log("Moyenne de gourpB : " +calculerMoyenne(groupB));
