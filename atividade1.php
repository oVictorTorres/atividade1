<!-- PRIMEIRA QUESTÃO -->
<?php
  echo "Olá, seja bem vindo!";
  echo "\n";
  $nome = readline("Digite seu nome: "); 
  echo "Olá, $nome! Seja bem vindo.\n";
?>
<!-- SEGUNDA QUESTÃO -->
<?php
echo "\n";
$numero1 = (int) readline("Digite o primeiro número inteiro: ");
$numero2 = (int) readline("Digite o segundo número inteiro: ");
$soma = $numero1 + $numero2;
$sub = $numero1 - $numero2;
$mult = $numero1 * $numero2;
$div = $numero1 / $numero2;
echo "Soma :" . $soma . "\n";
echo "Subtração :" . $sub . "\n";
echo "Multiplicação :" . $mult . "\n";
echo "Divisão :" . $div . "\n";
?>
<!-- TERCEIRA QUESTÃO -->
<?php
echo "\n";
$numero = (int) readline("Digite um número inteiro: ");
if ($numero > 0) {
  echo "O número é Positivo.";
} elseif ($numero < 0) {
  echo "O número é Negativo.";
} else {
  echo "O número é Zero.";
}
if ($numero % 2 == 0) {
  echo "\nAlém disso, ele é Par.\n";
} else {
  echo "\nAlém disso, ele é Ímpar.\n";
}
?>
<!-- QUARTA QUESTÃO -->
 <?php
  $tabuada = (int) readline("Digite um número: \n");
  $limite = (int) readline("Até onde você deseja que a tabuada vá? ");
for($i=1;$i <= $limite; $i++ ) {
  $resultado = $tabuada * $i;
  echo "$tabuada x $i = $resultado\n";
}
 ?>
 <!-- QUINTA QUESTÃO -->
<?php
$numeros = [];
echo "Digite 5 números inteiros:\n";
for ($i = 0; $i < 5; $i++) {
    $numeroDigitado = (int) readline("Digite o " . ($i + 1) . "º número: ");
    $numeros[] = $numeroDigitado;
}
$maior = max($numeros);
$menor = min($numeros);
$soma = array_sum($numeros);
$quantidade = count($numeros);
$media = $soma / $quantidade;
sort($numeros); 
$mediana = $numeros[2]; 
echo "Maior número digitado: $maior\n";
echo "Menor número digitado: $menor\n";
echo "Média dos números: $media\n";
echo "Mediana dos números: $mediana\n";
?>