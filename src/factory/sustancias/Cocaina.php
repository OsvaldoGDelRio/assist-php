<?php declare(strict_types=1);
namespace src\factory\sustancias;

use src\FactoryClassInterface;
use src\preguntas\Consume;
use src\preguntas\Pregunta;
use src\preguntas\PreguntaUno;
use src\sustancias\Cocaina as SustanciasCocaina;

class Cocaina implements FactoryClassInterface
{
    public function crear(array $array): SustanciasCocaina
    {
        $datosPregunta1 = require 'src/valores/PreguntaUno.php';
        $datosPregunta2 = require 'src/valores/PreguntaDos.php';
        $datosPregunta3 = require 'src/valores/PreguntaTres.php';
        $datosPregunta4 = require 'src/valores/PreguntaCuatro.php';
        $datosPregunta5 = require 'src/valores/PreguntaCinco.php';
        $datosPregunta6 = require 'src/valores/PreguntaSeisSiete.php';

        $p1 = new PreguntaUno($array['cocaina1'], $datosPregunta1);
        $consume = new Consume($p1);
        $p2 = new Pregunta($array['cocaina2'], $datosPregunta2, $consume);
        $p3 = new Pregunta($array['cocaina3'], $datosPregunta3, $consume);
        $p4 = new Pregunta($array['cocaina4'], $datosPregunta4, $consume);
        $p5 = new Pregunta($array['cocaina5'], $datosPregunta5, $consume);
        $p6 = new Pregunta($array['cocaina6'], $datosPregunta6, $consume);
        $p7 = new Pregunta($array['cocaina7'], $datosPregunta6, $consume);

        return new SustanciasCocaina($p1, $p2, $p3, $p4, $p5, $p6, $p7);
    }
}