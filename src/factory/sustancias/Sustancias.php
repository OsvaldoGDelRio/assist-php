<?php
namespace src\factory\sustancias;

use src\Factory;
use src\FactoryClassInterface;
use src\sustancias\Sustancias as SustanciasSustancias;

class Sustancias implements FactoryClassInterface
{
    public function crear(array $array): SustanciasSustancias
    {
        $factory = new Factory();

        $Tabaco = $factory->crear('src\factory\sustancias\Tabaco', $array);

        $Alcohol = $factory->crear('src\factory\sustancias\Alcohol', $array);

        $Cannabis = $factory->crear('src\factory\sustancias\Cannabis', $array);

        $Cocaina = $factory->crear('src\factory\sustancias\Cocaina', $array);

        $Anfetamina = $factory->crear('src\factory\sustancias\Anfetamina', $array);

        $Inhalables = $factory->crear('src\factory\sustancias\Inhalables', $array);

        $Alucinogenos = $factory->crear('src\factory\sustancias\Alucinogenos', $array);

        $Sedantes = $factory->crear('src\factory\sustancias\Sedantes', $array);

        $Opiaceos = $factory->crear('src\factory\sustancias\Opiaceos', $array);

        $Otros = $factory->crear('src\factory\sustancias\Otros', $array);

        return new SustanciasSustancias($Tabaco, $Alcohol, $Cannabis, $Cocaina, $Anfetamina, $Inhalables, $Sedantes, $Alucinogenos, $Opiaceos, $Otros);
    }
}
