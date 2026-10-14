# Modéliser une liaison complexe





## CLIENT

\------

id\_client

nom\_client



## COMMANDE

\--------

id\_commande

date\_commande

id\_client



## PRODUIT

\-------

id\_produit

nom\_produit



## LIGNE\_COMMANDE

\--------------

id\_commande, id\_produit

quantite\_commandee

Explications :

L’entité Commande possède la clé étrangère id\_client car chaque commande est rattachée à un seul client.

L’entité Ligne\_Commande permet de relier les commandes et les produits. Son identifiant est composé des identifiants des deux autres entités (id\_commande, id\_produit).

La donnée quantite\_commandee est placée logiquement dans Ligne\_Commande car elle dépend à la fois de la commande et du produit.

