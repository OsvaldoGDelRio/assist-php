<?php declare(strict_types=1);
namespace src\factory\sustancias;

use src\FactoryClassInterface;
use src\preguntas\Consume;
use src\preguntas\Pregunta;
use src\preguntas\PreguntaUno;
use src\sustancias\Tabaco as SustanciasTabaco;

class Tabaco implements FactoryClassInterface
{
    public function crear(array $array): SustanciasTabaco
    {
        $datosPregunta1 = require 'src/valores/PreguntaUno.php';
        $datosPregunta2 = require 'src/valores/PreguntaDos.php';
        $datosPregunta3 = require 'src/valores/PreguntaTres.php';
        $datosPregunta4 = require 'src/valores/PreguntaCuatro.php';
        $datosPregunta6 = require 'src/valores/PreguntaSeisSiete.php';

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
