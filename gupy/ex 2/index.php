
<?php
/*2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.
*/
$num_informado = $_GET['num'];
$num1 = 0;
$num2 = 1;
$num3 = 0;


while ($num3 < $num_informado) {
	$num3 = $num1+$num2;
	$num1 = $num2;
	$num2 = $num3;
}

if ($num3 == $num_informado) {
	echo "<script>alert('Faz parte da sequência')</script>";
}else{
	echo "<script>alert('Não faz parte da sequência')</script>";
}
?>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<form action="index.php" method="GET">
	<label for="num" style="font-size: 50px; font-family: 'Roboto', sans-serif;">Passe um número para verificar a existência dele na sequência de Fibonacci:</label>
	<input type="text" id="num" name="num" required style="font-size: 50px;">

	<input type="submit" value="Enviar">
</form>
