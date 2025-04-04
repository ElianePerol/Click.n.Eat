# Click'n Eat

## Contexte
Ce projet a été réalisé dans le cadre de ma formation en BTS SIO SLAM. Il s'agit d'une application web de réservation et de gestion de restaurants, permettant aux clients de passer commande et de réserver une table à l'avance afin de récupérer leur repas sans attendre. L’application optimise les échanges entre les différents acteurs du restaurant (administration, service, cuisine et clients) grâce à une gestion synchronisée des menus, des commandes et des réservations.

## Fonctionnalités Principales
- **Gestion des restaurants** : Création, modification, suppression et consultation des établissements.
- **Authentification sécurisée** : Connexion avec gestion des rôles pour les restaurateurs et les clients.
- **Gestion de la carte/menus** : Classification des articles par catégories et personnalisation de l'offre.
- **Gestion des commandes et réservations** : Prise de commande en ligne et réservation de tables, avec génération d’un QR code pour accéder à la commande.
- **Paiement en ligne** : Intégration avec l’API Stripe pour des transactions sécurisées.

## Architecture
Le projet repose sur le framework Laravel et s’articule autour du modèle MVC (Modèle-Vue-Contrôleur) :
- **Routes et Contrôleurs** : Organisation de la logique métier via des routes dédiées et des contrôleurs.
- **Modèles Eloquent** : Gestion des interactions avec la base de données et définition des relations entre les entités (utilisateurs, restaurants, menus, commandes).
- **Templates Blade** : Séparation claire entre la logique applicative et la présentation.
- **Gestion des migrations** : Déploiement et mise à jour simplifiés de la base de données grâce aux migrations Laravel.

## Technologies Utilisées
- **Backend** : Laravel (PHP)
- **Frontend** : HTML5, CSS3 (avec le template Bootstrap Quixlab), JavaScript
- **Base de données** : SQLite en préproduction et MySQL en production
- **Paiement en ligne** : API Stripe (via Laravel Cashier)
- **Outils de développement** : VSCode, Git
- **Tests** : Mise en place de tests unitaires via Pest pour valider le bon fonctionnement des fonctionnalités et assurer la qualité du code
