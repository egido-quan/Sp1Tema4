<?php

class PokerDice {

//Atributos
private static $num = array(1, 2, 3, 4, 5, 6);
private static $cara = array("As", "K", "Q", "J", "7", "8");
protected  static $tiradas = 0;

public function throw(): int {
    self::$tiradas ++;
    return self::$num[rand(1, 6)-1];            
}
public function shapeName(int $n): string {
    return self::$cara[$n - 1];
    
}
public static function getTotalThrows(): string {
    return "<h3>Dados tirados en total: " . self::$tiradas . "</h3>";
}
}
?>
