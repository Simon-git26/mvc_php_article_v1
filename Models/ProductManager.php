<?php

// Crée ma classe qui va heriter de Model et qui va contenir les methodes de récupération sur la bdd
class ProductManager extends Model {
    // Fonction qui va recuperer tous les articles dans la bdd
    // Vue que ma class ProductManager est un heritage de ma classe Abstraite Model
    // je peux tout à fait utiliser les methodes de Model meme s'il sont en protected
    // Et lui passer les bon parametres

    // Fonction qui sera utilisé dans mon ControllerHome pour récupérer tous mes articles
    public function getProducts() {
        // Le fait d'instancier mon objet passé en param dans Model, est qu'ici je créer une class Product qui contient mes données et que je pourrais rappeler dans Product.php
        return $this->getAll('articles', 'Product');
    }



    // Fonction utilisé dans mon ControllerPost pour ne récuperer qu'un seul article en fonction de son id
    // Retourne une fonction qui s'appelle getOnePost qui prend en @param: TABLE articles, l'objet, et id

    // getOnePost qui sera crée dans ma class parent View
    public function getProduct($id) {
        return $this->getOnePost('articles', 'Product', $id);
    }
}