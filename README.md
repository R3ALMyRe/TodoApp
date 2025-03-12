#TodoApp - Gestion des tâches avec Symfony par Remy Hamelin

Ce projet est une application Symfony qui vous permet de gérer une liste de tâches. Vous pouvez créer, modifier, supprimer et marquer les tâches comme terminées. Il y a également une API REST pour récupérer les tâches au format JSON.

Prérequis
Avant de commencer, assurez-vous que vous avez installé les éléments suivants :

PHP : version 8.0 ou supérieure.
Composer : un gestionnaire de dépendances pour PHP.
Node.js et npm : nécessaires pour la gestion des dépendances front-end comme Bootstrap.
Symfony CLI (facultatif mais recommandé) : pour faciliter le développement avec Symfony.
Installation
Clonez le projet : Commencez par cloner le projet à partir de GitHub ou du dépôt où il est stocké. Ouvrez votre terminal et tapez la commande suivante :

bash
Copier
Modifier
git clone https://github.com/votreutilisateur/TodoApp.git
cd TodoApp
Installez les dépendances PHP : Une fois que vous avez cloné le projet, vous devez installer les dépendances PHP nécessaires à l'application. Pour ce faire, exécutez la commande suivante :

nginx
Copier
Modifier
composer install
Cette commande va télécharger toutes les bibliothèques nécessaires à l'exécution de votre application Symfony.

Configurez la base de données : Vous devez configurer la connexion à la base de données dans le fichier .env (ou .env.local pour une configuration locale). Si vous utilisez une base de données MySQL, vous devez modifier la variable DATABASE_URL pour correspondre à votre configuration :

ini
Copier
Modifier
DATABASE_URL="mysql://root:root@127.0.0.1:3306/todo_app"
Remplacez root:root par vos propres informations de connexion.

Créez la base de données : Si vous n'avez pas encore créé la base de données, vous pouvez la créer en exécutant la commande suivante :

pgsql
Copier
Modifier
php bin/console doctrine:database:create
Appliquez les migrations : Ensuite, vous devez appliquer les migrations pour créer les tables dans la base de données :

bash
Copier
Modifier
php bin/console doctrine:migrations:migrate
Installez les dépendances front-end : Le projet utilise Bootstrap pour le style et d'autres dépendances JavaScript. Installez-les en exécutant la commande suivante :

nginx
Copier
Modifier
npm install
Cela téléchargera toutes les dépendances front-end nécessaires, y compris Bootstrap.

Compilez les assets : Si vous utilisez Webpack Encore pour gérer les assets, vous devez compiler les fichiers CSS et JavaScript avec cette commande :

arduino
Copier
Modifier
npm run dev
Cela générera les fichiers nécessaires pour que Bootstrap et d'autres dépendances front-end soient correctement chargés dans le projet.

Lancer l'application
Démarrez le serveur Symfony : Une fois tout configuré, vous pouvez démarrer le serveur de développement intégré de Symfony en exécutant la commande suivante :

pgsql
Copier
Modifier
symfony server:start
Votre application sera maintenant accessible à l'adresse http://localhost:8000.

Fonctionnalités principales
Page d'accueil : Sur la page d'accueil, vous pouvez voir la liste des tâches. Vous pouvez également créer, modifier, supprimer et marquer les tâches comme terminées.

Création d'une tâche : Pour ajouter une nouvelle tâche, cliquez sur le bouton Créer une nouvelle tâche. Un formulaire vous permettra de spécifier le titre, la description et le statut de la tâche (terminée ou non).

Modification d'une tâche : Lorsque vous consultez une tâche existante, vous pouvez la modifier en cliquant sur le bouton Modifier. Un formulaire s'affichera pour vous permettre de mettre à jour les informations de la tâche.

Marquer une tâche comme terminée : Si une tâche n'est pas encore terminée, vous verrez un bouton Terminer qui vous permettra de marquer la tâche comme terminée.

Suppression d'une tâche : Si vous souhaitez supprimer une tâche, cliquez sur le bouton Supprimer et confirmez l'action.

API REST
Le projet expose également une API REST qui permet de récupérer toutes les tâches en format JSON.

Endpoint : GET /api/tasks
URL : http://localhost:8000/api/tasks
Cet endpoint renverra une réponse JSON contenant toutes les tâches de la base de données. Voici un exemple de réponse :

json
Copier
Modifier
[
    {
        "id": 1,
        "title": "Tâche 1",
        "description": "Description de la tâche 1",
        "status": true,
        "created_at": "2025-03-12 10:00:00"
    },
    {
        "id": 2,
        "title": "Tâche 2",
        "description": "Description de la tâche 2",
        "status": false,
        "created_at": "2025-03-12 11:30:00"
    }
]
Tester l'API
Pour tester l'API, vous pouvez utiliser Postman ou tout autre outil qui permet d'envoyer des requêtes HTTP. Vous pouvez aussi tester directement dans votre navigateur en accédant à l'URL http://localhost:8000/api/tasks.

Structure du projet
Voici la structure principale de l'application :

src/Controller/TaskController.php : Ce contrôleur gère toutes les actions liées aux tâches, comme l'ajout, la modification et la suppression.
src/Controller/ApiController.php : Ce contrôleur expose l'API REST pour récupérer toutes les tâches au format JSON.
src/Form/TaskType.php : Ce fichier contient la définition du formulaire pour la création et la modification des tâches.
templates/ : Le dossier contenant tous les templates Twig pour les pages web de l'application.
public/ : Le dossier public contenant tous les fichiers statiques comme les fichiers CSS et JavaScript.
config/ : Le dossier de configuration pour Symfony.



