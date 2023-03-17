<?php

// Incluimos la definición de la clase Persona
require_once 'Persona.php';

class CuentaSueldo {
    // Propiedades de la clase
    private $owner;  // Almacena una instancia de la clase Persona
    private $saldo;
    private $limite;

    // Constructor de la clase
    public function __construct(Persona $owner, float $saldo, float $limite) {
        $this->owner = $owner;
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    // Métodos de la clase
    public function ingresar(float $monto) {
        if ($monto <= 0) {
            echo "Error: El monto a ingresar debe ser mayor a cero.\n";
            return;
        }

        $this->saldo += $monto;
        echo "Se ha ingresado $monto a la cuenta de " . $this->owner->getNombreCompleto() . ".\n";
    }

    public function retirar(float $monto) {
        if ($monto <= 0) {
            echo "Error: El monto a retirar debe ser mayor a cero.\n";
            return;
        }

        if ($monto > $this->saldo + $this->limite) {
            echo "Error: No se puede retirar más de lo que hay en la cuenta y en el límite de descubierto.\n";
            return;
        }

        $this->saldo -= $monto;
        echo "Se ha retirado $monto de la cuenta de " . $this->owner->getNombreCompleto() . ".\n";
    }

    public function verInfo() {
        echo "Datos de la cuenta de " . $this->owner->getNombreCompleto() . ":\n";
        echo "Saldo: $" . number_format($this->saldo, 2, '.', ',') . "\n";
        echo "Límite de descubierto: $" . number_format($this->limite, 2, '.', ',') . "\n";
    }
}

?>
