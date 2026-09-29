# udt2act2

1. Si hacemos $a=1, ¿cuál de las siguientes comparaciones es verdadera?

• “2" == $a Esta es false se convierte string en numero y compara 2=1-

• $a == false False , ya que esta compara true es igual que false.

• $a == 2 False compara si 1 es = que 2.

• --$a~ == false True ya que --resta antes y $a se convierte en 0 en php es false es igual a false si true.

2. Explica el porqué del resultado de la siguiente expresión:
$a = 5;
$b = 10;
$c = 15
$d = 20
$result = ++$a * $b / $c + $d-- -$a;
echo result;
Los operadores ++ y -- tienen mayor prioridad que las operaciones aritméticas básicas entonces  Incrementa el valor de $a de 5 a 6 inmediatamente y devuelve su nuevo valor (6).
Si seguimos la operaciones en orden primero multiplicación y división 
$d--  Devuelve el valor actual de $d (20) para la operación y, justo después de ser leído, reduce el valor de $d a 19.
 Entonces 
• Multiplicación: 6 * 10 = 60
• División: 60 / 15 = 4
• Suma: 4 + 20 = 24
• Resta: 24 - 6 = 18

5. Explica el porqué del resultado de la siguiente expresión:
• $resultado = (3 + 5) * 2 < 20 && 4 === "4" || 7 % 2 == 1;
Si hacemos echo se muestra 1
 Seguimos la operaciones aritmeticas hasta que llegamos a las comparaciones booleanas 16 < 20 && 4 === "4" || 1 == 1
 16 < 20 es true
 4 === "4" es false compara el tipo también.
 1 == 1 es true
La expresión va así: true && false || true 
El operador && AND tiene prioridad pero como termina || en OR  resulta en true.


