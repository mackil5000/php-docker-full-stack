<?php

declare(strict_types=1);

interface I
{
    const string Maggan = "Maggan";
}


class Foo implements I
{
    const string Test = "Test";
}

$t = new Foo();

echo $t::Maggan;




function slices(string $series, int $size): array
{
    $slices = [];
    $sl = strlen($series);
    if ($sl < $size || $size < 1) return $slices;

    for ($i = 0; $i < $sl; $i++) {

        if ($sl - $i < $size) break;

        array_push($slices, substr($series, $i, $size));
    }
    return $slices;
}


slices("12345", 1);
slices("12345", 2);
slices("12345", 3);
slices("12345", 4);
slices("12345", 5);
