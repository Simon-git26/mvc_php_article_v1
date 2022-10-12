<?php

// Créer ma classe parent, classe qui va affecter les autres class + methode communes aux autres models

abstract class Model {
    private static $_bdd;


    // Connexion a la BDD
    private static function setBdd() {
        self::$_bdd = new PDO('mysql:host)localhost;dbname=architexture_mvc_php;charset=utf8', 'root', '');

        // utilise les constante PDO pour gerer les erreurs
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }



    // créer une fonction de connexion par defaut a la bdd car si on est connecté alors OK sinon nous connecté avec notre function setBdd()
    protected function getBdd() {
        if (self::$_bdd == null) {
            self::setBdd();

            return self::$_bdd;
        }
    }



    // creation de la methode de recuperation d'elements en bdd
    protected function getAll($table, $obj) {
        $this->getBdd();

        $var = [];

        // Petite protection contre les injection sql
        $request = self::$_bdd->prepare('SELECT * FROM'.$table.'ORDER BY id desc');
        $request->execute();

        // Je créer une variable data qui va contenir mes données récupéré
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            // var contiendra les données sous forme d'objets
            // J'instancie les objet passé en parametre $data qui sont simplement un résultat de ce que j'ai récupérer dans la BDD
            $var[] = new $obj($data);
        }

        return $var;
        $request->closeCursor();
    }
}