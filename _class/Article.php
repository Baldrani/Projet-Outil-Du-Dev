<?php

/**
 * Created by PhpStorm.
 * User: robin
 * Date: 02/11/16
 * Time: 12:23
 */
class Article
{
    private $id;
    private $title;
    private $text;
    private $time;
    private $name;

    /**
     * Article constructor.
     * @param $id
     * @param $title
     * @param $text
     * @param $time
     * @param $name
     */
    public function __construct($id, $title, $text, $time, $name)
    {
        $this->id = $id;
        $this->title = $title;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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