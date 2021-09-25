<?php
namespace src\factory;

use src\Factory;
use src\FactoryClassInterface;
use src\PruebaAssist as SrcPruebaAssist;
use src\riesgos\RiesgoAlcohol;
use src\riesgos\RiesgoAlucinogenos;
use src\riesgos\RiesgoAnfetamina;
use src\riesgos\RiesgoCannabis;
use src\riesgos\RiesgoCocaina;
use src\riesgos\RiesgoInhalables;
use src\riesgos\RiesgoOpiaceos;
use src\riesgos\RiesgoOtros;
use src\riesgos\Riesgos;
use src\riesgos\RiesgoSedantes;
use src\riesgos\RiesgoTabaco;
use src\sustancias\Sustancias;

class PruebaAssist implements FactoryClassInterface
{
    public function crear(array $array): object
    {
        $factory = new Factory();

        $sustancias = $factory->crear('src\factory\sustancias\Sustancias', $array);

        $riesgos = $this->riesgos($sustancias);

        return new SrcPruebaAssist($sustancias, $riesgos);
    }

    private function riesgos(Sustancias $sustancias): Riesgos
    {
        return new Riesgos(
            new RiesgoTabaco($sustancias->tabaco()),
            new RiesgoAlcohol($sustancias->alcohol()),
            new RiesgoCannabis($sustancias->cannabis()),
            new RiesgoCocaina($sustancias->cocaina()),
            new RiesgoAnfetamina($sustancias->anfetamina()),
            new RiesgoInhalables($sustancias->inhalables()),
            new RiesgoSedantes($sustancias->sedantes()),
            new RiesgoAlucinogenos($sustancias->alucinogenos()),
            new RiesgoOpiaceos($sustancias->opiaceos()),
            new RiesgoOtros($sustancias->otros())
        );
    }
}
