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
?>
