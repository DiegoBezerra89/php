<?php
  function testeFunction($name) {
    return "Olá meu nome é $name\n";
  };

  $myClosure = function ($name) {
    return "Olá eu sou o myClosure meu nome é $name\n";
  };

  function testeCallback($callback, $parameter){
    if (is_callable($callback)) {
      return $callback($parameter);
    } else {
      return 'ERRO o callback não é executável';
    }
  };

  $callback_testeFunction = 'testeFunction';

  class user {
    public function __invoke($parameter)
    { 
      return "A função foi invocada $parameter\n";
    }

    // public function meuNome($name) {
    //   return "Olá meu nome é $name\n";
    // }
  };


  $user2 = new User;

  echo $user2("Dunha");

  echo testeCallback($user2, "Dunha");

  echo testeCallback($myClosure, "Diego");

