<?php
include 'personas.php';
include 'departamento.php';
$departamento1 = new departamento("Recursos Humanos");
$persona1 = new persona("Juan", 50000);
$departamento1->agregarPersona($persona1);
$persona2 = new persona("Maria", 60000);
$departamento1->agregarPersona($persona2);
echo "<h2>Departamento: " . $departamento1->getNombre() . "</h2>";
echo "<h3>Lista de Empleados:</h3>";
echo "<table border='1'>";
foreach ($departamento1->getPersonas() as $p) {
    echo "<tr><td>Nombre: " . $p->getNombre() . " — Salario: " . $p->getSalario() . " €</td></tr>";
}
echo "</table>";
?>