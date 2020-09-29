<?php
class User  {
private $telefon;
private $email;
protected $ucet;
protected $heslo;
protected $tajemstvi;
public $jmeno;
public $primeni;
public $vek;
public $zamestani;
public $skola;
function __construct() {
}
private function __set($telefon, $email ){
}
public function __get( $jmeno, $primeni, $vek, $zamestani, $skola){
}

}
?>