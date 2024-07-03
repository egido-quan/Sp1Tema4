<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<body>

<?php
   
    class PokerDice {

        //Atributos
        private $num = array(1, 2, 3, 4, 5, 6);
        private $cara = array("As", "K", "Q", "J", "7", "8");
        protected  static $tiradas = 0;

        public function throw(): int {
            self::$tiradas ++;
            return $this->num[rand(1, 6)-1];            
        }
        public function shapeName(int $n): string {
            return $this->cara[$n - 1];
            
        }
        public static function getTotalThrows(): void {
            echo "<h3>Dados tirados en total: " . self::$tiradas . "</h3>";
        }
    }
    
    //Declaramos 5 dados que luego tiraremos
    $dado1 = new PokerDice();
    $dado2 = new PokerDice();
    $dado3 = new PokerDice();
    $dado4 = new PokerDice();
    $dado5 = new PokerDice();

    tirarCincoDados($dado1, $dado2, $dado3, $dado4, $dado5);
    echo "<br>";
    tirarCincoDados($dado1, $dado2, $dado3, $dado4, $dado5);
    echo "<br>";
    tirarCincoDados($dado1, $dado2, $dado3, $dado4, $dado5);
    echo "<br>";
    tirarCincoDados($dado1, $dado2, $dado3, $dado4, $dado5);
    echo "<br>";

    PokerDice::getTotalThrows();

    function tirarCincoDados(PokerDice $dado1, PokerDice $dado2, PokerDice $dado3, PokerDice $dado4, PokerDice $dado5): void {
        echo "<br>Tiramos 5 dados:<br>";
        $n1 = $dado1->shapeName($dado1->throw());
        $n2 = $dado2->shapeName($dado2->throw());
        $n3 = $dado3->shapeName($dado3->throw());
        $n4 = $dado4->shapeName($dado4->throw());
        $n5 = $dado5->shapeName($dado5->throw());
        echo $n1 . "  " . $n2 . " " . $n3 . " " . $n4 . " " . $n5;      
    }

?>   


</bodY>
</htXl>
