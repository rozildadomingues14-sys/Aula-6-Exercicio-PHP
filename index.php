<?php
  echo "digite a cor:";
  $cor = readline();

        if ($cor == "vermelho") {
            echo "pare!";
          
        } elseif ($cor == "amarelo") { 
            echo "Atenção!";
          
        } elseif ($cor == "verde") { 
             echo "Siga!";
          
        } else {
             echo "Cor inválida";
}

 ?>


<?php
  echo "digite a peso:";
  $peso = (float) readline();

  echo "digite a altura:";
  $altura = (float) readline();

  $imc = $peso / ($altura*$altura);
        echo "imc:" . $imc. " \n";



 ?>


 <?php

echo "Digite um número de 1 a 7: ";
$dia_semana = (int) readline();

switch ($dia_semana) {

    case 1:
        echo "Domingo - Fim de semana!\n";
        break;

    case 2:
        echo "Segunda-feira - Dia útil.\n";
        break;

    case 3:
        echo "Terça-feira - Dia útil.\n";
        break;

    case 4:
        echo "Quarta-feira - Dia útil.\n";
        break;

    case 5:
        echo "Quinta-feira - Dia útil.\n";
        break;

    case 6:
        echo "Sexta-feira - Dia útil.\n";
        break;

    case 7:
        echo "Sábado - Fim de semana!\n";
        break;

    default:
        echo "Número inválido.\n";
}
?>


<?php

echo "Digite o valor da compra: R$ ";
$valor_compra = (float) readline();

if ($valor_compra > 150) {

    $desconto = $valor_compra * 0.10;
    $valor_final = $valor_compra - $desconto;

    echo "Desconto aplicado: 10%\n";
    echo "Valor final: R$ " . $valor_final . "\n";

} else {

    $falta = 150 - $valor_compra;

    echo "Sem desconto.\n";
    echo "Faltam R$ " . $falta . " para aplicar o desconto.\n";
}