<?php
$temperatura= rand(-10,100);
$cpuCargada =rand(0,150);
$token       = (rand(0, 1) === 1) ? "OK" : "";

if ($token === "") {
    die("❌ [ERROR CRÍTICO] No hay clave para arrancar el sistema.");
}

if ($temperatura < 0 || $temperatura > 80) {
    trigger_error("⚠️ [ADVERTENCIA] Temperatura fuera del rango seguro ({$temperatura} °C). Riesgo detectado.<br>", E_USER_WARNING);
}

try {
    if ($cpuCargada > 100) {
        throw new Exception("🚨 [ERROR CRÍTICO] La CPU está sobrecargada");
    }

    echo "✅ El servidor se ha iniciado correctamente.<br>";
} catch (Exception $e) { // <-- Se cerró el bloque try con '}'
    echo "error: " . $e->getMessage();
} finally {
    echo "<br>🚩 Fin del proceso";
}
?>