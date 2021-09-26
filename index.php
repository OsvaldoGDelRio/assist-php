<?php
declare(strict_types=1);

use src\Factory;

require_once __DIR__ . '/vendor/autoload.php';

$formulario = [
    'tabaco1' => '2',
    'tabaco2' => '0',
    'tabaco3' => '0',
    'tabaco4' => '0',
    'tabaco6' => '0',
    'tabaco7' => '6',
    
    'alcohol1' => '1',
    'alcohol2' => '0',
    'alcohol3' => '0',
    'alcohol4' => '0',
    'alcohol5' => '0',
    'alcohol6' => '0',
    'alcohol7' => '6',

    'cannabis1' => '1',
    'cannabis2' => '0',
    'cannabis3' => '0',
    'cannabis4' => '0',
    'cannabis5' => '0',
    'cannabis6' => '0',
    'cannabis7' => '6',

    'cocaina1' => '1',
    'cocaina2' => '0',
    'cocaina3' => '0',
    'cocaina4' => '0',
    'cocaina5' => '0',
    'cocaina6' => '0',
    'cocaina7' => '6',

    'anfetamina1' => '1',
    'anfetamina2' => '0',
    'anfetamina3' => '0',
    'anfetamina4' => '0',
    'anfetamina5' => '0',
    'anfetamina6' => '0',
    'anfetamina7' => '6',

    'inhalables1' => '1',
    'inhalables2' => '0',
    'inhalables3' => '0',
    'inhalables4' => '0',
    'inhalables5' => '0',
    'inhalables6' => '0',
    'inhalables7' => '6',

    'alucinogenos1' => '1',
    'alucinogenos2' => '0',
    'alucinogenos3' => '0',
    'alucinogenos4' => '0',
    'alucinogenos5' => '0',
    'alucinogenos6' => '0',
    'alucinogenos7' => '6',

    'sedantes1' => '1',
    'sedantes2' => '0',
    'sedantes3' => '0',
    'sedantes4' => '0',
    'sedantes5' => '0',
    'sedantes6' => '0',
    'sedantes7' => '6',

    'opiaceos1' => '1',
    'opiaceos2' => '0',
    'opiaceos3' => '0',
    'opiaceos4' => '0',
    'opiaceos5' => '0',
    'opiaceos6' => '0',
    'opiaceos7' => '6',

    'otros1' => '1',
    'otros2' => '0',
    'otros3' => '0',
    'otros4' => '0',
    'otros5' => '0',
    'otros6' => '0',
    'otros7' => '6',
    'otrosNombre' => 'Floripondio'
];


$factory = new Factory();

$assist = $factory->crear('src\factory\PruebaAssist',$formulario);

echo $assist->sustancia()->tabaco()->preguntaUno()->texto();
echo $assist->sustancia()->tabaco()->preguntaUno()->numero();

echo $assist->riesgo()->tabaco()->numero();
echo $assist->riesgo()->tabaco()->texto();
echo $assist->riesgo()->tabaco()->intervencion();