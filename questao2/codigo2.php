<?php
  function evenOdd(int $number)
  {
    if($number % 2 == 0)
    {
      return "Par";
    }
    else
    {
      return "Impar";
    }
  }

  function tenth(int $number)
  {
    $div = $number / 10;
    return $div;
  }

  // NÃO MODIFICAR NADA ABAIXO DESSA LINHA
  while($input = fscanf(STDIN, "%s\n")) {
    $number = intval(trim($input[0]));

    echo "number: ".$number."\ttenth: ".tenth($number)." \t even/odd: ".evenOdd($number).PHP_EOL;
  }