<?php
/*
4) Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:

SP – R$67.836,43
RJ – R$36.678,66
MG – R$29.229,88
ES – R$27.165,48
Outros – R$19.849,53

Escreva um programa na linguagem que desejar onde calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora.
*/

$valores_faturamento = array(
	'sp' => 67836.43,
    'rj' => 36678.66,
    'mg' => 29229.88,
    'es' => 27165.48,
    'outros' => 19849.53
);

$total_faturamento = array_sum($valores_faturamento);

foreach ($valores_faturamento as $estado => $valor_fatu) {
	$percentual = ($valor_fatu / $total_faturamento)*100;
	echo "Percentual de representação de $estado: <b>" . number_format($percentual, 2) . "%</b><br>";
}
?>