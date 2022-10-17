<?php

// require ma class View
require_once 'Views/View.php';

// S'occupe d'afficher mes articles sur la page d'accueil
class ControllerHome {

    private $_postManager;
    private $_view;


    // $url est fournis par le Router, donc si j'ai une url ET superieur a 1 alors qu'il devrait etre en page accueil alors retourner une erreur
    // car si url = 1 c'est que il y a 1 parametre et que ca doit etre Home
    public function __construct() {
        if (isset($url) && count($url) > 1) {
            throw new \Exception("Page introuvable", 1);
        } else {
            $this->posts();
        }
    }


    // Recuperer mes articles et les placer dans la variable $posts
    // Utiliser la method getPosts qui vient de PostManager car j'ai instancié la classe

    // Ensuite, recuperer de facon sécuriser ma view pour afficher l'erreur
    // En initialisant une instance de class View, je lui passe string Home, et donc grâce à ma class View, 
    // ceci sera appliquer $this->_file = 'Views/view'.$action.'.php';
    private function posts() {
        $this->_postManager = new PostManager();

        $posts = $this->_postManager->getPosts();

        $this->_view = new View('Home');
        $this->_view->generate(array('posts' => $posts));
    }
}