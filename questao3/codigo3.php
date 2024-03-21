<?php
  function search(int $y, int $x, array $array)
  {
    $nLinhas = count($array);
    if ($y < 0 || $y >= $nLinhas)
    {
      return "Y Inválido";
    }

    $linha = $array[$y];
    $nColunas = count($linha);
    if ($x < 0 || $x >= $nColunas) 
    {
      return "X Inválido";
    }

    return $array[$y][$x];
  }

  // NÃO MODIFICAR NADA ABAIXO DESSA LINHA
  $array[0] = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
  $array[1] = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
  $array[2] = ['!', '@', '#', '$', '%', '^', '&', '*', '('];

  while($input = fscanf(STDIN, "%s\n")) {
    [$y, $x] = explode(',', $input[0]);

    echo search(intval(trim($y)), intval(trim($x)), $array).PHP_EOL;
  }