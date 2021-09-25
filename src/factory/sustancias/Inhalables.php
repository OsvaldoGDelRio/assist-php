<?php declare(strict_types=1);
namespace src\factory\sustancias;

use src\FactoryClassInterface;
use src\preguntas\Consume;
use src\preguntas\Pregunta;
use src\preguntas\PreguntaUno;
use src\sustancias\Inhalables as SustanciasInhalables;

class Inhalables implements FactoryClassInterface
{
    public function crear(array $array): SustanciasInhalables
    {
        $datosPregunta1 = require 'src/valores/PreguntaUno.php';
        $datosPregunta2 = require 'src/valores/PreguntaDos.php';
        $datosPregunta3 = require 'src/valores/PreguntaTres.php';
        $datosPregunta4 = require 'src/valores/PreguntaCuatro.php';
        $datosPregunta5 = require 'src/valores/PreguntaCinco.php';
        $datosPregunta6 = require 'src/valores/PreguntaSeisSiete.php';

        $p1 = new PreguntaUno($array['inhalables1'], $datosPregunta1);
        $consume = new Consume($p1);
        $p2 = new Pregunta($array['inhalables2'], $datosPregunta2, $consume);
        $p3 = new Pregunta($array['inhalables3'], $datosPregunta3, $consume);
        $p4 = new Pregunta($array['inhalables4'], $datosPregunta4, $consume);
        $p5 = new Pregunta($array['inhalables5'], $datosPregunta5, $consume);
        $p6 = new Pregunta($array['inhalables6'], $datosPregunta6, $consume);
        $p7 = new Pregunta($array['inhalables7'], $datosPregunta6, $consume);

        return new SustanciasInhalables($p1, $p2, $p3, $p4, $p5, $p6, $p7);
    }
}