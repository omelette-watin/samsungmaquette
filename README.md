Site Maquette pour l'entreprise Samsung

Télécharger le code présent sur github. 
Les deux pages (mortes) se trouvent dans le dossier "maquette".


* Procédure pour lancer l'application Symfony:
    - Installer le client symfony https://symfony.com/doc/current/setup.html
    - Ouvrir le dossier Samsung dans un terminal et lancer la commande "composer install"
    - Créer la base de donnée avec "symfony console doctrine:database:create"
    - Effectuer les migrations avec "symfony console make:migration" puis "symfony console doctrine:migrations:migrate"
    - Peupler la base de donnée avec "symfony console doctrine:fixtures:load" ou en insérant directement des données grâce a "symfony console doctrine:query:sql 'votre requête sql..."
    - Lancer le serveur php en utilisant la commande "symfony serve" ou "symfony server:start'
 
