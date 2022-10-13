<?php

// require ma class View
require_once 'Views/View.php';

// S'occupe d'afficher mes articles sur la page d'accueil
class ControllerHome {

    private $_productManager;
    private $_view;


    // $url est fournis par le Router, donc si j'ai une url ET superieur a 1 alors qu'il devrait etre en page accueil alors retourner une erreur
    // car si url = 1 c'est que il y a 1 parametre et que ca doit etre Home
    public function __construct() {
        if (isset($url) && count($url) > 1) {
            throw new \Exception("Page introuvable", 1);
        } else {
            $this->products();
        }
    }


    // Recuperer mes articles et les placer dans la variable $products
    // Utiliser la method getProducts qui vient de ProductManager car j'ai instancié la classe

    // Ensuite, recuperer de facon sécuriser ma view pour afficher l'erreur
    // En initialisant une instance de class View, je lui passe string Home, et donc grâce à ma class View, 
    // ceci sera appliquer $this->_file = 'Views/view'.$action.'.php';
    private function products() {
        $this->_productManager = new ProductManager();

        $products = $this->_productManager->getProducts();

        $this->_view = new View('Home');
        $this->_view->generate(array('products' => $products));
    }
}