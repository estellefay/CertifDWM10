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

* Crée une base de donner et la liée à Laravel dans le .env ( si se n'est déjà fait)

* Commandes à réaliser dans le terminal pour lancer les migrations et seeders

    * php artisan migration

    * php artisan db:seed

* Attentiion il faudras sans doute faire :
    * php composer.phar dump-autoload 


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

* Sur la page Home j'ai utlisé Javascript pour pouvoir affichcer ou cacher des informations



###Remarques
 * Je n'est pas utiliser de template
 * j'ai utiliser des generateurs de border et box shadows tel que (https://www.cssmatic.com/box-shadow)
 * j'ai utiliser Adobe color 
 * Les images enregitré dans Laravel vienne de pixabay
 * J'ai utilisé GoogleFont

###Problèmes rencontrés  Déroulement de la certification
 * La première matinée : J'ai définie mon projet, crée mon Laravel, mes migrations, seeders, et modèles. J'ai eu pas mal de promblème sur mes seeder et mes migrations ( deliveries != deliverys)
 * L'après-midi c'est très bien passé, création de mes CRUD et debut de mon CSS
 * La dernière matinée à été consacrée au CSS - Media Queries et JS

###J'aurai aimé développer

 * J'aurai aimée developper plus de fonctionnalitées en JS
 * J'aurai aimée faire l'authentification pour pouvoir avoir différente interafaces
 
 Je suis contente et fière de la où je suis arrivé après ces 3 mois de formation, Merci





