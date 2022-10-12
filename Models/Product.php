<?php


// Le nom de cette classe n'est pas aléatoire, elle vient simplement de mon ProductManager.php, classe que j'ai instancer dans le getAll qui vient de Model
class Product {
    // Avoir les memes noms que mes champs dans la bdd et passé mes attributs en privée
    private $_id;
    private $_title;
    private $_content;
    private $_date;

    // @param $data qui contient mes données BDD et qui a était instancer dans Model->getAll
    public function __construct(array $data) {
        // Hydratation des données
        $this->hydrate($data);
    }


    // exemple de mon objet $data
    /*$data = [
        'id' = 1,
        'title' = 'dave',
        'content' = 'test',
        'date' = '2022-10-05'
    ]*/

    // function hydrate
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set'.ucFirst($key);
            // Simplement mon for each va boucler sur mon tableau et crée des key pour chaque champs, ce qui donnera
            // setId, setTitle, setContent, setDate
            if (method_exists($this, $method)) {
                $this->method($value);
            }
        }
    }

    // *********************** Setters *******************
    // setter id
    public function setId($id) {
        // id est un int donc faire ceci
        $id = (int) $id;
        if ($id > 0) {
            $this->_id= $id;
        }
    }

    // setter title
    public function setTitle($title) {
        // verifier que title est bien string
        if (is_string($title)) {
            $this->_title= $title;
        }
    }

    // setter content
    public function setContent($content) {
        // verifier que content est bien string
        if (is_string($content)) {
            $this->_content= $content;
        }
    }

    // setter content
    public function setDate($date) {
        $this->_date = $date;
    }



    // *********************** Getters *******************
    
}