<?php

// Incluimos la definición de la clase Persona
require_once 'Persona.php';

class CuentaCorriente {
    // Propiedades de la clase
    private $owner;  // Almacena una instancia de la clase Persona
    private $saldo;
    private $interes;

    // Constructor de la clase
    public function __construct(Persona $owner, float $saldo, float $interes) {
        $this->owner = $owner;
        $this->saldo = $saldo;
        $this->interes = $interes;
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

        if ($monto > $this->saldo) {
            echo "Error: No se puede retirar más de lo que hay en la cuenta.\n";
            return;
        }

        $this->saldo -= $monto;
        echo "Se ha retirado $monto de la cuenta de " . $this->owner->getNombreCompleto() . ".\n";
    }

    public function verInfo() {
        echo "Datos de la cuenta de " . $this->owner->getNombreCompleto() . ":\n";
        echo "Saldo: $" . number_format($this->saldo, 2, '.', ',') . "\n";
        echo "Interés: " . $this->interes . "%\n";
    }
}

?>
