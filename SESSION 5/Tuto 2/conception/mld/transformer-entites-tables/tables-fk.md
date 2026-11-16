Transformer les relations en clés étrangères
1. Table VILLE
id_ville (PK)
nom_ville
2. Table AUTEUR
id_auteur (PK)
nom_auteur
prenom_auteur
email_auteur
id_ville (FK)
3. Table CATEGORIE
id_categorie (PK)
nom_categorie
4. Table ARTICLE
id_article (PK)
titre_article
contenu_article
date_publication
statut_article
image_article
id_auteur (FK)
id_categorie (FK)
Conclusion

Les trois relations 1–N du projet Blog ont été transformées en clés étrangères.

La table AUTEUR contient la clé étrangère id_ville (FK).

La table ARTICLE contient les clés étrangères id_auteur (FK) et id_categorie (FK).

Les tables VILLE et CATEGORIE conservent uniquement leurs clés primaires (PK).

Cette transformation permet de relier les différentes tables de la base de données.