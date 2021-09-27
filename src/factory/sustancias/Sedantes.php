<?php declare(strict_types=1);
namespace src\factory\sustancias;

use src\FactoryClassInterface;
use src\preguntas\Consume;
use src\preguntas\Pregunta;
use src\preguntas\PreguntaUno;
use src\sustancias\Sedantes as SustanciasSedantes;
use src\valores\Valores;

class Sedantes implements FactoryClassInterface
{
    public function crear(array $array): SustanciasSedantes
    {
        $valores = new Valores();

        $datosPregunta1 = $valores->_preguntaUno;
        $datosPregunta2 = $valores->_preguntaDos;
        $datosPregunta3 = $valores->_preguntaTres;
        $datosPregunta4 = $valores->_preguntaCuatro;
        $datosPregunta5 = $valores->_preguntaCinco;
        $datosPregunta6 = $valores->_preguntaSeisSiete;

        $p1 = new PreguntaUno($array['sedantes1'], $datosPregunta1);
        $consume = new Consume($p1);
        $p2 = new Pregunta($array['sedantes2'], $datosPregunta2, $consume);
        $p3 = new Pregunta($array['sedantes3'], $datosPregunta3, $consume);
        $p4 = new Pregunta($array['sedantes4'], $datosPregunta4, $consume);
        $p5 = new Pregunta($array['sedantes5'], $datosPregunta5, $consume);
        $p6 = new Pregunta($array['sedantes6'], $datosPregunta6, $consume);
        $p7 = new Pregunta($array['sedantes7'], $datosPregunta6, $consume);

        return new SustanciasSedantes($p1, $p2, $p3, $p4, $p5, $p6, $p7);
    }
}
