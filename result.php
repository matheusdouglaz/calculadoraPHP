<?php
include 'funcoes.php';

if (isset($_POST['raio']) && is_numeric($_POST['raio']) && $_POST['raio'] > 0) {
    $raio = floatval($_POST['raio']);
    
    $area = calcular_area($raio);
    $circunferencia = calcular_circunferencia($raio);
    
    echo "<h1>Resultado</h1>";
    echo "A área do círculo é: " . number_format($area, 2) . " unidades quadradas.<br>";
    echo "O comprimento da circunferência é: " . number_format($circunferencia, 2) . " unidades.<br>";
} else {

    echo "<h1>Erro</h1>";
    echo "Por favor, informe um valor válido para o raio.";
}
?>
