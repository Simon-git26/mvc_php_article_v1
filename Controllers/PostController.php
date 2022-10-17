<?php


// use App\Models\PostManager\PostManager;


// Créer mon controlleur qui va afficher UN post
// require ma class View
require_once 'Views/View.php';

// S'occupe d'afficher mes posts sur la page d'accueil
class PostController {

    private $_postManager;
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
            $this->insertPost();
        } else {
            $this->post();
        }
    }


    // Fonction qui va afficher un article
    // Checker le @param id, et appelé la fonction getPost en lui passant l'id en @param
    // Retourne une view qui va s'appeler viewSinglePost afin de respecter mes nominations de fichier

    // Jenvoi une variable $post qui contient tous les champs recuperer donc
    // id / title / content / date
    private function post() {
        if (isset($_GET['id'])) {
            $this->_postManager = new PostManager;
            $post = $this->_postManager->getPost($_GET['id']);
            $this->_view = new View('SinglePost');
            $this->_view->generatePost(array('post' => $post));
        }
    }


    // Fonction pour afficher le formulaire de création d'un post
    private function create() {
        if (isset($_GET['create'])) {
            $this->_view = new View('CreatePost');
            $this->_view->generateForm();
        }
    }


    // Fonction pour stocker un post en base de donnée
    // Appeler la fonction createPost
    // Recuperer tous les post de la base de donnée
    // Afficher la view home
    private function insertPost() {
        $this->_postManager = new PostManager;
        $post = $this->_postManager->createPost();
        // décomposer en deux fonction
        $posts = $this->_postManager->getPosts();
        $this->_view = new View('Home');
        $this->_view->generate(array('posts', $posts));
    }
}