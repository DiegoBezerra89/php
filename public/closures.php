<?php
  $person = function($nome, $sobrenome) {
    return "Meu nome é $nome $sobrenome\n";
  };

  $printPerson = $person("Diego", "Bezerra");

  function teste($idade, $cor, $nome = "Diego", $sobrenome = "Bezerra") {
    $person = function() use ($nome, $sobrenome) {
      return "Meu nome é $nome $sobrenome\n";
    };

    $personComplete = function() use ($idade, $cor) {
      return "Tenho $idade e sou $cor";
    };
    
    //I need to learn how to return an array and destructuring it, like in JS, is it possible on PHP? We will see.
    return $personComplete;
  }

$meuTeste = teste(32, "Pardo")();
var_dump($meuTeste);
  echo "$printPerson";
  echo "$meuTeste";