<?php

class Persona
{

  protected $nombre;
  protected $apellido;
  protected $genero;
  protected $edad;

  public function __constructor()
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->genero = $genero;
    $this->edad = $edad;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
  public function getApellido()
  {
    return $this->apellido;
  }
  public function getGenero()
  {
    return $this->genero;
  }
  public function getEdad()
  {
    return $this->edad;
  }

  public function setNombre($nombre)
  {
    $this->nombre = strtoupper($nombre);
    return $this;
  }
  
  public function setApellido($apellido)
  {
    $this->apellido = strtoupper($apellido);
    return $this;
  }
  
  public function setGenero($genero)
  {
    $this->genero = strtoupper($genero);
    return $this;
  }
  
  public function setEdad($edad)
  {
    $this->edad = $edad; 
    return $this;
  }
  

  // metdos

  public function Guardar(){
    echo "Se guardaron los datos: "  .$this->nombre. " " . $this->apellido. " " . $this->genero. " " . $this->edad;
  }
}