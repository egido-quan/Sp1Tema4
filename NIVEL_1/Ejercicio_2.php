<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<body>

<?php
   
    class Shape {

        //Atributos
        protected $anchura = 0; //Protected para que sea visible por las clases hijas
        protected $altura = 0;

        //Constructor
        public function __construct(int $anchura, int $altura) {
            $this->anchura = $anchura;
            $this->altura = $altura;
        }
   }

   class Triangulo extends Shape {

        public function area():int {
            return ($this->anchura * $this->altura) / 2;
        }
    }

    class Rectangulo extends Shape {

        public function area():int {
            return ($this->anchura * $this->altura);
        }
    }

    $tri = new Triangulo(9, 4);
    echo "El área del triángulo de base 9 y altura 4 es: " . $tri->area() . "<br>";
    echo "<br>";

    $rect = new Rectangulo(5, 8); 
    echo "El área del rectángulo de base 9 y altura 4 es: " . $rect->area() . "<br>";
    echo "<br>";

    $tri = new Triangulo(12, 5);
    echo "El área del triángulo de base 12 y altura 5 es: " . $tri->area() . "<br>";
    echo "<br>";

    $rect = new Rectangulo(29, 8); 
    echo "El área del triángulo de base 29 y altura 8 es: " . $rect->area() . "<br>";
    echo "<br>";

?>   


</bodY>
</htXl>
