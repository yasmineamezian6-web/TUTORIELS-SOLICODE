let ventes = [110, 75, 150, 180, 90, 130, 100, 160];

let nombreVentes = ventes.length;
let chiffreAffaires = 0;
let max = ventes[0];
let min = ventes[0];
let nbExceptionnelles = 0;
let caExceptionnelles = 0;

for (let i = 0; i < ventes.length; i++) {
    
    let vente = ventes[i];
   
    chiffreAffaires = chiffreAffaires + vente;

    if (vente > max) {
        max = vente;
    }

    if (vente < min) {
        min = vente;
    }

    if (vente >= 130) {
        nbExceptionnelles++;
        caExceptionnelles = caExceptionnelles + vente;
    }
}
console.log("Nombre total de ventes :", nombreVentes);
console.log("Chiffre d'affaires total :", chiffreAffaires);
console.log("Vente maximale :", max);
console.log("Vente minimale :", min);
console.log("Nombre de ventes exceptionnelles :", nbExceptionnelles);
console.log("CA des ventes exceptionnelles :", caExceptionnelles);