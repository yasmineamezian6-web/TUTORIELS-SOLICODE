function calculerSurface(longueur, largeur) {
    return longueur * largeur;
}
function  estGrand(surface) {
    return surface >=100;
}

let surfacePiece = calculerSurface(12, 10); 
let grandPiece = estGrand(surfacePiece);

console.log("Surface calculée : " + surfacePiece + " m²");
console.log("Grande pièce : " + grandPiece);