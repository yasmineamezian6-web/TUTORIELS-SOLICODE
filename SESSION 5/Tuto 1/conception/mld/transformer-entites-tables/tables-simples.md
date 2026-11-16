Transformation des entités en tables
1. Table VILLE
id_ville (PK)
nom_ville
2. Table AUTEUR
id_auteur (PK)
nom_auteur
prenom_auteur
email_auteur
3. Table ARTICLE
id_article (PK)
titre_article
contenu_article
date_publication
statut_article
image_article
4. Table CATEGORIE
id_categorie (PK)
nom_categorie
Conclusion
Les quatre entités du MCD ont été transformées en quatre tables relationnelles.

Chaque identifiant est défini comme une clé primaire (PK) afin de garantir l'unicité des enregistrements.

À cette étape, aucune clé étrangère (FK) n'a été ajoutée, car les relations seront traitées dans le prochain tutoriel.