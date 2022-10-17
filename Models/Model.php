<?php

// Créer ma classe parent, classe qui va affecter les autres class + methode communes aux autres models
abstract class Model {
    private static $_bdd;

    // Connexion a la BDD
    // Utilise les constante PDO pour gerer les erreurs
    private static function setBdd() {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=architecture_mvc_php;charset=utf8', 'root', 'root');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }


    // Créer une fonction de connexion par defaut à la bdd car si on est connecté alors OK sinon nous connecté avec notre function setBdd()
    protected function getBdd() {
        if (self::$_bdd == null) {
            self::setBdd();

            return self::$_bdd;
        }
    }



    // Creation de la methode de recuperation d'elements en bdd
    // Requete dynamique donc petite protection contre les injection sql, je la prepare puis l'execute
    // Je crée une var $data qui va contenir mes données récupérer SOUS FORME D'OBJET
    // J'instancie les objets passés en paramètre $data qui sont simplement un résultat de ce que j'ai récupéré dans la BDD
    protected function getAll($table, $obj) {
        $this->getBdd();

        $var = [];

        $request = self::$_bdd->prepare('SELECT * FROM ' .$table. ' ORDER BY id desc');
        $request->execute();

        // $data
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }

        return $var;
        $request->closeCursor();
    }





    // Creation de la methode pour recuperer un article en fonction de son id 
    // utiliser dans ControllerPost

    // Requete dynamique donc petite protection contre les injection sql, je la prepare puis l'execute
    // WHERE id = ? // simplement l'id envoyé en parametre de la fonction

    // Je crée une var $data qui va contenir mes données récupérer SOUS FORME D'OBJET
    // J'instancie les objets passés en paramètre $data qui sont simplement un résultat de ce que j'ai récupéré dans la BDD
    // Je recupere mes données finale dans un TABLEAU, donc au moment de l'utilisation de ces données, ne pas oublier que c'est un tableau
    protected function getOnePost($table, $obj, $id) {
        $this->getBdd();
        $var = [];
        
        $request = self::$_bdd->prepare("SELECT id, title, content, DATE_FORMAT(date, '%d/%m/%Y à %Hh%imin%ss') AS date FROM " .$table. " WHERE id = ?");
        $request->execute(array($id));

        // $data
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $request->closeCursor();
    }




    // Recuperer la table dans laquel inserer mes données et l'objet
    // Requete insertion
    // Je n'est pas mise ca dans un form car j'utilise la fonction date qui va permettre d'inserer la date actuelle en jour mois année
    protected function createOnePost($table, $obj) {
        $this->getBdd();

        $request = self::$_bdd->prepare("INSERT INTO ".$table." (title, content, date) VALUES (?, ?, ?)");
        $request->execute(array($_POST['title'], $_POST['content'], date("d.m.Y")));

        $request->closeCursor();
    }
}