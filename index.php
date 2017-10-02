<?php 

//LAIA MATEU PEREZ



// Definimos la clase
class Coche{
     
    // Atributos
    public $modelo;
    public $color;
     
    // Constructor
    public function __construct($modelo, $color){
        $this->modelo = $modelo;
        $this->color = $color;
    }
     
    //Métodos LAIA
    public function getColor(){
// Devolvemos un atributo
        return $this->color;
    }
     
    public function setColor($color){
//Le damos un valor a un atributo
        $this->color = $color;
    }
    
     public function nothing($color){
//No hago nada
         return $this->color;
    }
     
    public function guay($color){
//No hago nada
        return $this->color;
    }
    
    public function chachiruli($color){
//No hago nada
        return $this->color;
    }

     public function fantasma($color){
//No hago nada
        return $this->modelo;
    }    
    public function mostrarInfo(){
         
        // Llamamos a otros métodos
        $info = "<h1>Información del coche:</h1>";
        $info.= "Modelo: ".$this->modelo;
        $info.= "<br/> Color: ".$this->getColor();
         
        return $info;
    }
}
?>
 
<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>El constructor</title>
</head>
<body>
 
<?php
// Creamos el objeto / Instanciamos la clase y le pasamos los parámetros del constructor
$coche = new Coche("TESLA LAIA", "ROJO", 100);
 
// Mostramos la información del primer coche
echo $coche->mostrarInfo();
 
$coche2 = new Coche("SEAT 500", "VERDE");
 
// Mostramos la información del segundo coche
echo $coche2->mostrarInfo();
?>
 
</body>
</html>