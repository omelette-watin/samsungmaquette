= Site Maquette pour l'entreprise Samsung

== Prerequisites

== Procédure pour lancer l'application Symfony :
1) Installer le client symfony https://symfony.com/doc/current/setup.html

2) Ouvrir le dossier Samsung dans un terminal et lancer la commande:

[source]
-----
docker-compose up -d
-----

3) Créer la base de donnée avec :

[source]
-----
symfony console doctrine:database:create
-----

4)Effectuer les migrations avec :  

[source]
-----
symfony console make:migration
-----

puis :

[source] 
-----
symfony console doctrine:migrations:migrate
-----
 
