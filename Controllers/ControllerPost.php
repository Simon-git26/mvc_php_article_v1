<?php

// Créer mon controlleur qui va afficher UN post

// require ma class View
require_once 'Views/View.php';

// S'occupe d'afficher mes products sur la page d'accueil
class ControllerPost {

    private $_productManager;
    private $_view;


    // $url est fournis par le Router, donc si j'ai une url ET superieur a 1 alors qu'il devrait etre en page accueil alors retourner une erreur
    // car si url = 1 c'est que il y a 1 parametre et que ca doit etre Home
    public function __construct() {
        if (isset($url) && count($url) < 1) {
            throw new \Exception("Page introuvable", 1);
            // si jai le param create
        } elseif (isset($_GET['create'])) {
            $this->create();
        }elseif (isset($_GET['status']) && isset($_GET['status']) == "new") {
            $this->store();
        } else {
            $this->product();
        }
    }


    // Fonction qui va afficher un article
    // Checker le @param id, et appelé la fonction getProduct en lui passant l'id en @param
    // Retourne une view qui va s'appeler viewSinglePost afin de respecter mes nominations de fichier

    // Jenvoi une variable $product qui contient tous les champs recuperer donc
    // id / title / content / date
    private function product() {
        if (isset($_GET['id'])) {
            $this->_productManager = new ProductManager;
            $product = $this->_productManager->getProduct($_GET['id']);
            $this->_view = new View('SinglePost');
            $this->_view->generatePost(array('product' => $product));
        }
    }


    // Fonction pour afficher le formulaire de création d'un product
    private function create() {
        if (isset($_GET['create'])) {
            $this->_view = new View('CreatePost');
            $this->_view->generateForm();
        }
    }


    // Fonction pour stocker un post en base de donnée
    // Appeler la fonction createProduct
    // Recuperer tous les post de la base de donnée
    // Afficher la view home
    private function store() {
        $this->_productManager = new ProductManager;
        $product = $this->_productManager->createProduct();
        $products = $this->_productManager->getProducts();
        $this->_view = new View('Home');
        $this->_view->generate(array('products', $products));
    }
}