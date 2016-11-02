<?php

class nom
{
	private $nom;
	private $prenom;

    public function getNom()
    {
        return $this->nom;
    }

    private function _setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    private function _setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}

?>