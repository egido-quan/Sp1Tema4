<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<body>
<?php
   
    class Employee {

        //Atributos
        private $nombre = "";
        private $sueldo = 0;

        //Funciones públicas
        public function initialize(string $nombre, int $sueldo): void {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        public function pagar(): void {
            echo "Nombre del empleado: $this->nombre<br>";
            echo "Sueldo de $this->nombre: $this->sueldo<br>";
            echo "$this->nombre tiene que pagar impuestos? ";
            echo ($this->sueldo >  6000) ? "sí" : "no";
        }
   }

    $empleado = new Employee();
    $empleado->initialize("Juan", 10000);
    $empleado->pagar();
    echo "<br><br>";

    $empleado = new Employee();
    $empleado->initialize("Luis", 4000);
    $empleado->pagar();

?>   


</bodY>
</htXl>
