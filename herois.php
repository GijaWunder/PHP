<?php

print "*** TOP FIVE HEROIS DO MUNDO ***\n";

$herois = ['Batman', 'Thor', 'Hulk', 'Flash', 'Jaspion'];

$herois[] = "mulher maravilha";
$herois[] = "ladybug";

array_unshift($herois, "minha mae"); //adiciona no inicio da lista
array_push ($herois, "homem aranha"); //adiciona no fim da lista
array_splice($herois, 3, 0, "viuva negra"); //coloca o item no meio da lista

for ($i=0; $i < sizeof($herois); $i++) { 
    print $i + 1 . "° " . $herois[$i] . "\n";
}

//array_filter -> filtra numeros repetidos
//ficacode, fonte de programador
