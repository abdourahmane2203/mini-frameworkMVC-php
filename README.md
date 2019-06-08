Documentation:

Ce mini framework est développé par Abdourahmane DIALLO.
C'est une architecture qui respecte les spécifications du design pattern MVC.
Le projet est composé principalement de trois dossiers.
- config/ : c'est le coeur de l'architecture.
-  public/ : qui contient les fichiers css et javaScript.
- src/ : Ce dossier sera certainement l'ami du développeur, il contient les dossiers controller/, entities/, models/ et views/.

Création d'un controller: 
Tous les controllers seront crées dans le dossiers controlles/ et se termine toujours par Controller et etend la classe de base config\Controller .
Ex: Voir dans le dossier controller

NB:
La methode load() permet de charger une vue.

Toutes les vues vont se trouver dans le dossiers views/ 
Le dossier models contiendra nos rêquetes.

Pour modifier les paramètre de connexion à la base de données allez dans la classe config\Model.php
