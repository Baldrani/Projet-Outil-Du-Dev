<?php

/**
 * Created by PhpStorm.
 * User: robin
 * Date: 02/11/16
 * Time: 11:15
 */
class Personne
{
	
	private $name;
	private $prenom;

	function __construct($name, $prenom)
	{
		$this->name = $name;
		$this->prenom = $prenom;
	}

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    private function _setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of prenom.
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Sets the value of prenom.
     *
     * @param mixed $prenom the prenom
     *
     * @return self
     */
    private function _setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}