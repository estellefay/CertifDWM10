# Certification DWM10 - Market Music



### Description

Market Music est une application permettant de gérer plusieurs articles en rapport avec la musique (Cours de musique, Instruments, Accessoire, Chèque cadeau).


### Mise en route

* Avoir installé

    * Apache2

    * PHP 7.2

    * MySql

    * Composer

* Avoir un Laravel Fonctionelle 

* Commandes à réaliser dans le terminal pour lancer les migrations et seeders

    * php artisan migration

    * php artisan db:seed


### Database et Seeder

* Utilisation de tables ( Articles, Types et Deliveries)et de table intermédiaire ( Article_Delivery )


* Utilistion de HowMany (type_id)

* Utilisation de HowManyTo (Article_Delivery) 


### Controller

Plusieurs controller on été mis en place

* NavController : Gére les diférentes actions de navigation

* ArticleController : Gére les différentes action de type insert, delete et update en rapport avec les articles.

* DeliveryController : Gére l'action d'inserer les différents mode de livraisons.



###Fontionnalitées

* Vous pouvez modifier les articles 

* Vous pouvez modifier uniquement les stocks

* Vous pouvez suprimer les articles et les mode de livraisons

* Vous pouvez ajouter les modes de livraison et les articles

* Vous pouvez voir la liste de tous les articles



###Remarques