# SysBancario 💳

Este es un sistema bancario que consta de dos clases: `CuentaSueldo` y `CuentaCorriente`.

## CuentaSueldo

La clase `CuentaSueldo` tiene las siguientes propiedades:

- `owner`: el propietario de la cuenta
- `saldo`: el saldo actual de la cuenta
- `limite`: el límite de la cuenta

Y los siguientes métodos:

- `ingresar()`: agrega fondos a la cuenta
- `retirar()`: retira fondos de la cuenta
- `verInfo()`: muestra la información de la cuenta

## CuentaCorriente

La clase `CuentaCorriente` tiene las siguientes propiedades:

- `owner`: el propietario de la cuenta
- `saldo`: el saldo actual de la cuenta
- `interes`: el interés de la cuenta

Y los siguientes métodos:

- `ingresar()`: agrega fondos a la cuenta
- `retirar()`: retira fondos de la cuenta
- `verInfo()`: muestra la información de la cuenta

#### Ejemplo de uso:



    // Crea una instancia de Persona
    
    $persona = new Persona('Juan', 'Pérez', '12345678', 'juan.perez@example.com');
    
      
    
    // Crea una instancia de CuentaSueldo
    
    $cuenta_sueldo = new CuentaSueldo($persona, 1000, 500);
    
      
    
    // Crea una instancia de CuentaCorriente
    
    $cuenta_corriente = new CuentaCorriente($persona, 2000, 0.05);
    
      
    
    // Realiza algunas operaciones en las cuentas
    
    $cuenta_sueldo->ingresar(500);
    
    $cuenta_sueldo->retirar(200);
    
    $cuenta_sueldo->verInfo();
    
      
    
    $cuenta_corriente->ingresar(1000);
    
    $cuenta_corriente->retirar(500);
    
    $cuenta_corriente->verInfo();

# Calmspresso ☕

Este es un sistema de una cafetera que consta de la clase `Calmspresso`.

## Propiedades de la clase:
-   `maxCap`: la capacidad máxima de la cafetera en cm3
-   `curAmount`: la cantidad actual de café en la cafetera en cm3

## Métodos de la clase:
-    `fillMachine()`: llena la cafetera a su capacidad máxima.
-   `pourMug($cantidad)`: sirve la cantidad de café especificada en cm3.
-   `emptyMachine()`: vacía la cafetera.
-   `addCoffee($cantidad)`: agrega la cantidad de café especificada en cm3.

#### Ejemplo de uso:

	
    // Crea una instancia de la cafetera
    $cafetera = new Calmspresso(1000);
    
    // Llena la cafetera
    $cafetera->fillMachine();
    
    // Agrega café
    $cafetera->addCoffee(500);
    
    // Sirve una taza de café
    $cafetera->pourMug(300);
    
    // Vuelve a llenar la cafetera
    $cafetera->fillMachine();
    
    // Agrega café
    $cafetera->addCoffee(1000);
    
    // Sirve otra taza de café
    $cafetera->pourMug(500);
    
    // Vacia la cafetera
    $cafetera->emptyMachine();
