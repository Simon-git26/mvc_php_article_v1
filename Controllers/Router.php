<?php

// require ma class View
require_once 'Views/View.php';

// private $ctrl pour derterminer quel controlleur je veux
// private $_view pour derterminer quel view je veux
class Router {
    
    private $ctrl;
    private $_view;



    // Instancie ma classe // Chargement auto des classe du dossier Models
    // ex: require_once('Models/'.$class.'.php'); peut etre egal à require_once('Models/Product.php');
    // J'initialise une variable url vide
    public function routeRequest() {
        try {
            spl_autoload_register(function($class) {
                require_once('Models/'.$class.'.php');
            });

            // $url
            $url = '';


            // Je determine le controlleur en fonction de la valeur de cette var$
            // Je decompose l'url et j'applique un filtre

            // Je recupere le premier parametre de l'url
            // Je met tout en minuscule et la premiere lettre en majuscule
            if (isset($_GET['url'])) {
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0]));

                // En fonction du nom du premier parametre que je recoit, si c'est Home je mettrai ControllerHome fichier donc
                // Pour les autres pages, gérer de nouveaux controllers en premier param
                // Et je retrouve lechemin du controleur voulu
                $controllerClass = "Controller".$controller;
                $controllerFile = "Controllers/".$controllerClass.".php";


                // Si le fichier du controller existe
                // Je lance la classe en question avec tous les param url pour l'encapsulation

                // Sinon
                // Je renvoi une erreur
                if (file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->ctrl = new $controllerClass($url);
                } else {
                    throw new \Exception("Page introuvable, le fichier du controller n'existe pas !", 1);
                }
            } else {
                // si else, alors je retourne la pahe Home
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