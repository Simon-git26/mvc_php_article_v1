<?php

// Crée ma classe qui va heriter de Model et qui va contenir les methodes de récupération sur la bdd
class PostManager extends Model {
    // Fonction qui va recuperer tous les posts dans la bdd
    // Vue que ma class PostManager est un heritage de ma classe Abstraite Model
    // je peux tout à fait utiliser les methodes de Model meme s'il sont en protected
    // Et lui passer les bon parametres

    // Fonction qui sera utilisé dans mon ControllerHome pour récupérer tous mes posts
    public function getPosts() {
        // Le fait d'instancier mon objet passé en param dans Model, est qu'ici je créer une class Post qui contient mes données et que je pourrais rappeler dans Post.php
        return $this->getAll('posts', 'Post');
    }



    // Fonction utilisé dans mon ControllerPost pour ne récuperer qu'un seul article en fonction de son id
    // Retourne une fonction qui s'appelle getOnePost qui prend en @param: TABLE posts, l'objet, et id

    // getOnePost qui sera crée dans ma class parent View
    public function getPost($id) {
        return $this->getOnePost('posts', 'Post', $id);
    }



    // Fonction pour crée un post utilisé dans ControllerPost
    public function createPost() {
        return $this->createOnePost('posts', 'Post');
    }
}