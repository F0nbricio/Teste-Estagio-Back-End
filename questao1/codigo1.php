<?php
  function hypotenuse(int $a, int $b)
  {
    $powA = pow($a, 2);
    $powB = pow($b, 2);
    $soma = $powA + $powB;
    return sqrt($soma);
  }

  // NÃO MODIFICAR NADA ABAIXO DESSA LINHA
  while($input = fscanf(STDIN, "%s\n")) {
    [$a, $b] = explode(',', $input[0]);

    echo hypotenuse(intval(trim($a)), intval(trim($b))).PHP_EOL;
  }