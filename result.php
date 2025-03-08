<?php

$x = str_replace(",", ".", $_POST['x']);
$y = str_replace(",", ".", $_POST['y']);
$operador = $_POST['operador'];

function area_quadrilatero($x, $y) {
    return $x * $y;
}

function area_triangulo($x, $y) {
    return ($x * $y) / 2;
}

function equacao_primeiro_grau($x, $y) {

    if ($x != 0) {
        return -$y / $x;
    } else {
        return "Equação inválida (coeficiente a não pode ser zero)";
    }
}

echo "<h1>Resultado do Cálculo</h1>";

switch ($operador) {
    case 'area_quadrilatero':
        echo "A área do quadrilátero é: " . area_quadrilatero($x, $y) . " unidades quadradas.";
        break;
    case 'area_triangulo':
        echo "A área do triângulo é: " . area_triangulo($x, $y) . " unidades quadradas.";
        break;
    case 'equacao_primeiro_grau':
        echo "A solução da equação {$x}x + {$y} = 0 é: " . equacao_primeiro_grau($x, $y);
        break;
    default:
        echo "Operação inválida!";
        break;
}

echo '<br /><a href="index.html">Voltar</a>';
?>
