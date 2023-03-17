<?php 

class Persona {
  // Definimos las propiedades privadas de la clase
  private $nombre;
  private $apellido;
  private $dni;
  private $mail;

  // Definimos el constructor de la clase
  public function __construct($nombre, $apellido, $dni, $mail) {
      // Asignamos los valores de los parámetros a las propiedades correspondientes
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->dni = $dni;
      $this->mail = $mail;
  }

  // Definimos los métodos para obtener y establecer el valor de cada propiedad
  public function getNombre() {
      return $this->nombre;
  }

  public function setNombre($nombre) {
      $this->nombre = $nombre;
  }

  public function getApellido() {
      return $this->apellido;
  }

  public function setApellido($apellido) {
      $this->apellido = $apellido;
  }

  public function getDni() {
      return $this->dni;
  }

  public function setDni($dni) {
      $this->dni = $dni;
  }

  public function getMail() {
      return $this->mail;
  }

  public function setMail($mail) {
      $this->mail = $mail;
  }
}

?>