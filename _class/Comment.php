<?php

/**
 * Created by PhpStorm.
 * User: robin
 * Date: 02/11/16
 * Time: 12:24
 */
class Comment
{
    private $id;
    private $text;
    private $time;
    private $name;

    /**
     * Comment constructor.
     * @param $id
     * @param $text
     * @param $time
     * @param $name
     */
    public function __construct($id, $text, $time, $name)
    {
        $this->id = $id;
        $this->text = $text;
        $this->time = $time;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



}