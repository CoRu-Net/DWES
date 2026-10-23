<?php

function esPar(int $num): bool
{
    return $num % 2 === 0;
}

$num = 8;

echo (esPar($num) ? "es par" : "es impar");
