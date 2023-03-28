<?php
/*3) Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
• O menor valor de faturamento ocorrido em um dia do mês;
• O maior valor de faturamento ocorrido em um dia do mês;
• Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.

IMPORTANTE:
a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
b) Podem existir dias sem faturamento, como nos finais de semana e feriados. Estes dias devem ser ignorados no cálculo da média;*/

$json = file_get_contents('faturamento.json');
$data = json_decode($json, true);

$menor_valor = $data[0];
$maior_valor = $data[0];

$soma_valores = 0;
$cont = 0;

foreach ($data as $valor) {
	if ($valor !== null) {
        // verificar se é o menor valor ou se ainda não há um menor valor definido
		if ($menor_valor === null || $valor < $menor_valor) {
			$menor_valor = $valor;
		}
	}
	if ($valor > $maior_valor) {
		$maior_valor = $valor;
	}
	$soma_valores += $valor;
	$cont++;
}

$mediaMensal = $soma_valores / $cont;

$dias_acima_media = 0;

foreach ($data as $valor) {
	if ($valor > $mediaMensal) {
		$dias_acima_media++;
	}
}


echo "Menor valor de faturamento diário: <b>" . $menor_valor . "<br></b>";
echo "Maior valor de faturamento diário: <b>" . $maior_valor . "<br></b>";
echo "Número de dias em que o faturamento diário foi superior à média mensal: <b>" . $dias_acima_media . "</b>";
?>
