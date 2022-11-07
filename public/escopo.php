<?php

//global

//local

$nameGlobal = "Diego";

function person() {
  global $nameGlobal;
  $nameLocal = "Renata";
  echo "$nameGlobal\n";
  echo $nameLocal;
};

person();