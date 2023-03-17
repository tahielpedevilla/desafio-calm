<?php

class Calmspresso {
    // Propiedades de la clase
    private $maxCap;     // Capacidad máxima de la cafetera en cm3
    private $curAmount;  // Cantidad actual de café en la cafetera en cm3

    // Constructor de la clase
    public function __construct($maxCap = 1000) {
        $this->maxCap = $maxCap;
        $this->curAmount = 0;
    }

    // Métodos de la clase
    public function fillMachine() {
        $this->curAmount = $this->maxCap;
        echo "La cafetera ha sido llenada a su capacidad máxima de {$this->maxCap} cm3.\n";
    }

    public function pourMug($cantidad) {
        if ($cantidad <= 0) {
            echo "Error: La cantidad de café a servir debe ser mayor a cero.\n";
            return;
        }

        if ($cantidad > $this->curAmount) {
            $cantidad = $this->curAmount;
            $this->curAmount = 0;
            echo "No hay suficiente café en la máquina. Se ha servido la cantidad disponible.\n";
        } else {
            $this->curAmount -= $cantidad;
            echo "Se ha servido {$cantidad} cm3 de café.\n";
        }
    }

    public function emptyMachine() {
        $this->curAmount = 0;
        echo "La cafetera ha sido vaciada.\n";
    }

    public function addCoffee($cantidad) {
        if ($cantidad <= 0) {
            echo "Error: La cantidad de café a agregar debe ser mayor a cero.\n";
            return;
        }

        $nuevaCantidad = $this->curAmount + $cantidad;

        if ($nuevaCantidad > $this->maxCap) {
            $this->curAmount = $this->maxCap;
            echo "La cafetera ha sido llenada a su capacidad máxima de {$this->maxCap} cm3.\n";
        } else {
            $this->curAmount = $nuevaCantidad;
            echo "Se han agregado {$cantidad} cm3 de café.\n";
        }
    }
}

?>
