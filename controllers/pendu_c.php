<?php

class Pendu
{

    protected $mot;

    private function get_mot()
    {
        $dictionary_string = file_get_contents(dirname(__FILE__) . '/../data/dictionary.json');
        $dictionary = json_decode($dictionary_string, true);
        $length_dictionary = sizeof($dictionary);
        $index_random = rand(0, $length_dictionary - 1);
        $mot_random = $dictionary[$index_random];
        return $mot_random;
    }

    public function view()
    {
        $this->mot = $this->get_mot();
        $_SESSION['length-mot'] = strlen($this->mot);
        $_SESSION['mot'] = $this->mot;
        $_SESSION['erreur'] = 0;
        $_SESSION['trouver'] = 0;

        return 'pendu.php';
    }

    public function verifLettre()
    {
        $letter = $_GET['lettre'];

        $mot = $_SESSION['mot'];

        $erreur = $_SESSION['erreur'];

        $lettreTrouver =  $_SESSION['trouver'];

        $asLetter = false;

        $trouver = false;

        $limite = false;

        $posLetter = [];

        for ($i=0; $i < $_SESSION['length-mot']; $i++) {
            if($mot[$i] == $letter) {
                $asLetter = true;
                array_push($posLetter, $i);
                $lettreTrouver++;
            }
        }

        if(!$asLetter){
            $erreur++;
        }

        $_SESSION['erreur'] = $erreur;
        $_SESSION['trouver'] = $lettreTrouver;
        
        if($lettreTrouver == strlen($mot)){
            $trouver = true;
        }

        if($erreur >= 9){
            $limite = true;
        }

        $results = array(
            "asLetter" => $asLetter,
            "posLetter" => $posLetter,
            "erreur" => $erreur,
            "trouver" => $trouver,
            "limite" => $limite,
        );

        return json_encode($results);
    }
}
