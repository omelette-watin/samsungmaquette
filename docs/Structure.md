# Structure du projet

- **/public** est la racine du serveur web.
- **/config** contient la configuration du projet.
- **/src** contient les controllers des pages ainsi que les modèles des entités (partenaires et nouveaux produits).
- **/templates** contient les vues Twig.


# Pourquoi utiliser Symfony ?

Bien que la tentation de créer un site mort simple, notre équipe a considéré que la **scalabilité** est nécessaire sur ce genre de projet pour ce genre d'entreprise.

Symfony présentes les **avantages** suivants :
- Scalabilité 
- Architecture claire
- Templates réutilisables
- Sécurité intégrée, en cas de création d'un système de compte utilisateur
- Modèles de base de donnée personnalisable
- Développement rapide

Pour en savoir plus sur [Symfony](https://symfony.com/doc/current/index.html)...

# Les technologies utilisées

### **Twig** : 
#### Moteur de génération de vue par défaut de Symfony.

- Scalabilité et imbrication de templates  
- Sanitazation (désinfection) des données utilisateurs

### **Annotation bundle** : 
#### Système de routage par les décorateurs de fonction

- Permet une plus grande flexibilité dans le routage
- Intégration et gestion des paramètres de l'url

### **Asset package** :
#### Préchargement des assets tels que les images ou les feuilles de style

- Augmente considérablement les performances et le temps de rendu de la vue

### **SQLite** :
#### Système de base de donnée fichier

- Présente l'avantage de ne pas nécessite d'hébergement de la base de donnée

# Design et Front 

Notre équipe a choisi de créer un rendu **thème sombre** (absolument nécessaire aujourd'hui). 
A noter que le site permet de changer de **thème light**.

Concernant le design du site, nous avons choisi un visuel sobre avec une esthétique brut. 

Le design et une partie de la palette de couleur est inspiré du site [Grafikart.fr](https://grafikart.fr/)



    
    
