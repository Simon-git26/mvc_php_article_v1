<?php


class View {
    // fichier vue quil faut envoyer au user
    private $_file;

    // Titre de la page
    private $_titre;

    // action sera le nom de la view à envoyer
    /* ex: si ma view est viewHome alors j'appelle l'$action qui sera 'Views/view'.$action.'.php' == 'Views/viewHome.php */
    function __construct($action){
        $this->_file = 'Views/view'.$action.'.php';
    }




    // Créer une fonction qui va generer et afficher la view
    // Definir le contenu à envoyer, recuperer les données de la base $data
    // generateFile() = en @param elle va envoyer le fichier de la view à afficher mais aussi donc $data = les données récuperé de la BDD
    // Mise en place de mon template
    // Affiche ma view avec l'echo une fois qu'elle à était définis
    public function generate($data) {
        $content = $this->generateFile($this->_file, $data);
        // Template
        $view = $this->generateFile('Views/template/template.php', array('titre' => $this->_titre, 'content' => $content));
        echo $view;
    }



    // Créer la fonction qui va me permettre de definir le contenu à envoyer donc la view d'un article
    public function generatePost($data) {
        $content = $this->generateFile($this->_file, $data);

        //template
        $view = $this->generateFile('Views/template/templateSingle.php', array('titre' => $this->_titre, 'content' => $content));
        echo $view;
    }




    // Créer la fonction qui permet d'afficher le form pour creation d'un post
    public function generateForm() {
        $content = $this->generateFileSimple($this->_file);

        //template
        $view = $this->generateFile('Views/template/templateForm.php', array('titre' => $this->_titre, 'content' => $content));
        echo $view;
    }





    // Ma fonction generateFile, elle va checker si la var $file envoyé en param exist
    // Si elle existe alors j'extrait les données de $data
    // Je commence la mise en mémoire tampon de mes données   ob_start();
    // la view se charge
    // je ferme la mémoire tampon   return ob_get_clean();

    // sinon = message erreur
    private function generateFile($file, $data) {
        if (file_exists($file)) {
            extract($data);

            // Commencer la temporisation, cela evite que des données ne viennent s'afficher avant que la view ne se soit chargé
            ob_start();
            require $file;
            return ob_get_clean();

        } else {
            throw new \Exception("Fichier ".$file." est introuvable", 1);
        }
    }




    // Fonction qui envoie 
    private function generateFileSimple($file) {
        if (file_exists($file)) {
            require $file;
        } else {
            throw new \Exception("Fichier ".$file." est introuvable", 1);
        }
    }
}