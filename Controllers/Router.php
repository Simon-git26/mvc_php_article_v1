<?php

// require ma class View
require_once 'Views/View.php';

class Router {
    // Derterminer quel controlleur je veux
    private $ctrl;
    // et quel view je veux
    private $_view;


    public function routeRequest() {
        try {
            // Instancie ma classe // Chargement auto des classe du dossier Models
            spl_autoload_register(function($class) {
                require_once('Models/'.$class.'.php');
            });

            // Je créer une variable url 
            $url = '';

            // Je determine le controlleur en fonction de la valeur de cette var$
            if (isset($_GET['url'])) {
                // Je decompose l'url et j'applique un filtre
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

                // je recupere le premier parametre de l'url
                // Je met tout en minuscule et la premiere lettre en majuscule
                $controller = ucfirst(strtolower($url[0]));

                $controllerClass = "Controller".$controller;
                // Je retrouve lechemin du controleur voulu
                $controllerFile = "Controllers/".$controllerClass.".php";

                // Si le fichier du controller existe
                if (file_exists($controllerFile)) {
                    // Je lance la classe en question avec tous les param url pour l'encapsulation
                    require_once($controllerFile);
                    $this->ctrl = new $controllerClass($url);
                } else {
                    throw new \Exception("Page introuvable, le fichier du controller n'existe pas !", 1);
                }
            } else {
                require_once('Controllers/ControllerHome.php');
                $this->ctrl = new ControllerHome($url);
            }


        } catch (\Exception $e) {
            $errorMsg = $e->getMessage();
            // Recuperer de facon sécuriser ma view pour afficher l'erreur
            // En initialisant une instance de class View, je lui passe string Error, et donc grace à ma class view, ceci sera appliquer $this->_file = 'Views/view'.$action.'.php';
            $this->_view = new View('Error');
            $this->_view->generate(array('errorMsg' => $errorMsg));
            
        }
    }
}