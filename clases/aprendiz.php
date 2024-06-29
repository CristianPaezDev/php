<?php

require __DIR__ ."/persona.php";

class Aprendiz extends Persona 
{
    protected $db;
    protected $connection;

    public function __construct()
    {
        parent::__construct(); 
    }
}