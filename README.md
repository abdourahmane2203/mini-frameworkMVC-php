Documentation:

Ce mini framework est développé par Abdourahmane DIALLO.
C'est une architecture qui respecte les spécifications du design pattern MVC.
Le projet est composé principalement de trois dossiers.
- config/ : c'est le coeur de l'architecture.
-  public/ : qui contient les fichiers css et javaScript.
- src/ : Ce dossier sera certainement l'ami du développeur, il contient les dossiers controller/, entities/, models/ et views/.

Création d'un controller: 
Tous les controllers seront crées dans le dossiers controlles/ et se termine toujours par Controller et etend la classe de base config\Controller .
Ex:
<?php
use config\Controller;

class AccueilController extends Controller
{
    public function index() {
            return $this->view->load("accueil/index");
        }
}

NB: l'objet view dans la classe config\View qui est disponible dans la classe config\Controller donc dans les autres Controllers que nous allons créer.
La methode load() permet de charger une vue.

Toutes les vues vont se trouver dans le dossiers views/ 