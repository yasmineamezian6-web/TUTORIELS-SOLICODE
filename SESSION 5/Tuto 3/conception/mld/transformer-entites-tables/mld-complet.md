MLD Complet – Projet Blog
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
4. Table TAG
id_tag (PK)
nom_tag
5. Table ARTICLE
id_article (PK)
titre_article
contenu_article
date_publication
statut_article
image_article
id_auteur (FK)
id_categorie (FK)
6. Table ARTICLE_TAG
id_article (PK, FK)
id_tag (PK, FK)
Conclusion

Le MLD complet du projet Blog comporte six tables relationnelles : VILLE, AUTEUR, CATEGORIE, TAG, ARTICLE et ARTICLE_TAG.

La table ARTICLE_TAG permet de gérer la relation plusieurs-à-plusieurs (N–N) entre les articles et les tags.

Elle possède une clé primaire composée de deux clés étrangères : id_article et id_tag.

Le MLD est maintenant complet et prêt pour la création physique des tables avec SQL.