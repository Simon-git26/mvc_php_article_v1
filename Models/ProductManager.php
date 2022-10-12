<?php

// Crée ma classe qui va heriter de Model et qui va contenir les methodes de récupération sur la bdd
class ProductManager extends Model {
    // Fonction qui va recuperer tous les articles dans la bdd
    public function getArticles() {
        // Vue que ma class ProductManager est un heritage de ma classe Abstraite Model
        // je peux tout à fait utiliser les methodes de Model meme s'il sont en protected
        // Et lui passer les bon parametres
        return $this->getAll('articles', 'Article');
    }
}