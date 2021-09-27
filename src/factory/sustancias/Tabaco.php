<?php declare(strict_types=1);
namespace src\factory\sustancias;

use src\FactoryClassInterface;
use src\preguntas\Consume;
use src\preguntas\Pregunta;
use src\preguntas\PreguntaUno;
use src\sustancias\Tabaco as SustanciasTabaco;
use src\valores\Valores;

class Tabaco implements FactoryClassInterface
{
    public function crear(array $array): SustanciasTabaco
    {
        $valores = new Valores();

        $datosPregunta1 = $valores->_preguntaUno;
        $datosPregunta2 = $valores->_preguntaDos;
        $datosPregunta3 = $valores->_preguntaTres;
        $datosPregunta4 = $valores->_preguntaCuatro;
        $datosPregunta6 = $valores->_preguntaSeisSiete;

        $p1 = new PreguntaUno($array['tabaco1'], $datosPregunta1);
        $consume = new Consume($p1);
        $p2 = new Pregunta($array['tabaco2'], $datosPregunta2, $consume);
        $p3 = new Pregunta($array['tabaco3'], $datosPregunta3, $consume);
        $p4 = new Pregunta($array['tabaco4'], $datosPregunta4, $consume);
        $p6 = new Pregunta($array['tabaco6'], $datosPregunta6, $consume);
        $p7 = new Pregunta($array['tabaco7'], $datosPregunta6, $consume);

        return new SustanciasTabaco($p1, $p2, $p3, $p4, $p6, $p7);
    }
}
