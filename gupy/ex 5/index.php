<?php
/*
5) Escreva um programa que inverta os caracteres de um string.

IMPORTANTE:
a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;
b) Evite usar funções prontas, como, por exemplo, reverse;
*/

echo "Antes de ser invertida:".$string = "Target sistemas";

$tamanho = strlen($string);

$novaString = "";
for ($i = $tamanho - 1; $i >= 0; $i--) {
  $novaString .= $string[$i];
}

// exibindo a nova string invertida
echo "<br>".$novaString;

?>