<?php

// S'occupe d'afficher mes articles sur la page d'accueil
class ControllerHome {

    private $_productManager;
    private $_view;


    public function __construct($url) {
        // url fournis par router, donc si j'ai une url et superieur a 1 alors qu'il devrait etre en page accueil alors retourner une erreur
        if (isset($url) && count($url) > 1) {
            throw new \Exception("Page introuvable", 1);
        } else {
            $this->products();
        }
    }


    private function products() {
        $this->_productManager = new ProductManager();

        // recuperer mes articles et les placer dans la variable $products
        // getProducts vient de ProductManager car j'ai instancié l'objet
        $products = $this->_productManager->getProducts();

        require_once('Views/viewHome.php');
    }
}