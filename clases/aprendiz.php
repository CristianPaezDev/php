<?php

include_once('persona.php');

class Aprendiz extends Persona 
{
    protected $db;
    protected $connection;

    public function __constructor()
    {
        parent::__constructor();
    }
}