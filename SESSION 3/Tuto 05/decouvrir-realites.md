# ***Découvrir les réalités et proposer des identifiants***



## ***1. Tableau complété***



Donnée observée	Valeur répétée	Réalité représentée	Identifiant proposé	Dépendance

nom\_auteur	Madani	Auteur	id\_auteur	idauteur -> nomauteur, prenomauteur, emailauteur

nom\_ville	Tanger, Rabat	Ville	id\_ville	idville -> nomville

nom\_categorie	Développement	Catégorie	id\_categorie	idcategorie -> nomcategorie

## **2. Explication du raisonnement**



### a) Découverte de l'entité Auteur





Dans le tableau, l'auteur Madani apparaît dans trois articles différents. Son prénom et son adresse e-mail restent identiques dans ces occurrences.



L'adresse e-mail madani@mail.com est un identifiant naturel, car elle permet de distinguer cet auteur des autres auteurs présents dans les données.



Nous pouvons donc identifier la réalité Auteur et proposer l'identifiant id\_auteur.



La dépendance fonctionnelle est :



id\_auteur -> nom\_auteur, prenom\_auteur, email\_auteur



On peut également observer la dépendance naturelle :



email\_auteur -> nom\_auteur, prenom\_auteur



### b) Découverte de l'entité Ville





Les valeurs Tanger et Rabat apparaissent plusieurs fois dans la donnée nom\_ville.



Cette répétition montre que plusieurs articles sont associés à une même ville. La ville représente une réalité distincte appelée Ville.



Nous proposons l'identifiant id\_ville.



La dépendance fonctionnelle est :



id\_ville -> nom\_ville



### c) Découverte de l'entité Catégorie





La valeur Développement apparaît quatre fois dans la donnée nom\_categorie. La valeur Actualité apparaît une seule fois.



La répétition de Développement indique que plusieurs articles peuvent appartenir à la même catégorie. Cette réalité peut être représentée par une entité appelée Catégorie.



Nous proposons l'identifiant id\_categorie.



La dépendance fonctionnelle est :



id\_categorie -> nom\_categorie



## 3\. Conclusion





L'observation des données permet de découvrir trois réalités importantes : Auteur, Ville et Catégorie.



L'auteur peut être identifié naturellement par son adresse e-mail dans ce jeu de données. Pour les villes et les catégories, nous proposons respectivement les identifiants id\_ville et id\_categorie.



Les dépendances fonctionnelles indiquent les données déterminées par chaque identifiant. À cette étape, nous nous limitons à découvrir les réalités et leurs identifiants, sans construire les relations entre les entités ni le schéma complet de la base de données.

