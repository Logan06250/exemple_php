<?php 

class listPseudo

{

  private $arrayPseudo = array();
  private $listChar="abcdefghijklmnopqrstuvwxyz";

  function __construct(){

    for ($i = 1; $i <= $_POST['nb']; $i++) {

        $this->arrayPseudo[] = $this->createText();
    }
  }

  function createText(){

    $tempValue =  str_shuffle($this->listChar);

    return $tempValue;


  }

  function afficher(){

    foreach($this->arrayPseudo as $value){

        echo $value;
        echo "<br/>";

    }   
  }
}

$list = new listPseudo;
$list->afficher();

?>