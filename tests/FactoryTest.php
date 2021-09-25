<?php
namespace tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use src\factory\PruebaAssist;
use src\factory\sustancias\Alcohol;
use src\factory\sustancias\Sustancias;
use src\preguntas\Consume;
use src\preguntas\Pregunta;
use src\preguntas\PreguntaUno;
use src\PruebaAssist as SrcPruebaAssist;
use src\sustancias\Alcohol as SustanciasAlcohol;
use src\sustancias\Sustancias as SustanciasSustancias;

class FactoryTest extends TestCase
{
    public function setUp(): void
    {
        $this->formulario = [
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

        $this->prueba = new PruebaAssist();
        $this->prueba = $this->prueba->crear($this->formulario);
    }

    public function testClaseDevuelveExcepcionSiNoHayDatosCorrectos()
    {
        $this->expectException(InvalidArgumentException::class);
        $a = new Alcohol();
        $this->assertInstanceOf(SustanciasAlcohol::class, $a->crear([
        'alcohol1' => 'xxx',
        'alcohol2' => '0',
        'alcohol3' => '0',
        'alcohol4' => '0',
        'alcohol5' => '0',
        'alcohol6' => '0',
        'alcohol7' => '6',]));
    }

    public function testSustanciasDevuelveObjetoCorrecto()
    {
        $sustancias = new Sustancias();
        $this->assertInstanceOf(SustanciasSustancias::class, $sustancias->crear($this->formulario));

    }

    public function testPruebaAssistDevuelveObjetoCorrecto()
    {
        $prueba = new PruebaAssist();
        $this->assertInstanceOf(SrcPruebaAssist::class, $prueba->crear($this->formulario));
    }

    public function testRiesgosDevuelveElRiesgoCorrecto()
    {
        $this->assertSame('0', $this->prueba->riesgo()->tabaco()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->alcohol()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->cannabis()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->cocaina()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->anfetamina()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->alucinogenos()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->inhalables()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->sedantes()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->opiaceos()->numero());
        $this->assertSame('6', $this->prueba->riesgo()->otros()->numero());

        $this->assertSame('Riesgo bajo', $this->prueba->riesgo()->tabaco()->texto());
        $this->assertSame('Riesgo bajo', $this->prueba->riesgo()->alcohol()->texto());
        $this->assertSame('Riesgo moderado', $this->prueba->riesgo()->cannabis()->texto());
        $this->assertSame('Riesgo moderado', $this->prueba->riesgo()->cocaina()->texto());
        $this->assertSame('Riesgo moderado', $this->prueba->riesgo()->anfetamina()->texto());
        $this->assertSame('Riesgo moderado', $this->prueba->riesgo()->alucinogenos()->texto());
        $this->assertSame('Riesgo moderado', $this->prueba->riesgo()->inhalables()->texto());
        $this->assertSame('Riesgo moderado', $this->prueba->riesgo()->sedantes()->texto());
        $this->assertSame('Riesgo moderado', $this->prueba->riesgo()->opiaceos()->texto());
        $this->assertSame('Riesgo moderado', $this->prueba->riesgo()->otros()->texto());

        $this->assertSame('No requiere intervención (consejo breve)', $this->prueba->riesgo()->tabaco()->intervencion());
        $this->assertSame('No requiere intervención (consejo breve)', $this->prueba->riesgo()->alcohol()->intervencion());
        $this->assertSame('Requiere intervención breve', $this->prueba->riesgo()->cannabis()->intervencion());
        $this->assertSame('Requiere intervención breve', $this->prueba->riesgo()->cocaina()->intervencion());
        $this->assertSame('Requiere intervención breve', $this->prueba->riesgo()->anfetamina()->intervencion());
        $this->assertSame('Requiere intervención breve', $this->prueba->riesgo()->alucinogenos()->intervencion());
        $this->assertSame('Requiere intervención breve', $this->prueba->riesgo()->inhalables()->intervencion());
        $this->assertSame('Requiere intervención breve', $this->prueba->riesgo()->sedantes()->intervencion());
        $this->assertSame('Requiere intervención breve', $this->prueba->riesgo()->opiaceos()->intervencion());
        $this->assertSame('Requiere intervención breve', $this->prueba->riesgo()->otros()->intervencion());
    }

    public function testSustanciasDevuelvenStringCorrectoEnPreguntas()
    {
        $this->assertSame('No', $this->prueba->sustancia()->tabaco()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->alcohol()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->cannabis()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->cocaina()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->anfetamina()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->alucinogenos()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->inhalables()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->sedantes()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->opiaceos()->preguntaUno()->texto());
        $this->assertSame('Sí', $this->prueba->sustancia()->otros()->preguntaUno()->texto());

        $this->assertSame('2', $this->prueba->sustancia()->tabaco()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->alcohol()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->cannabis()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->cocaina()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->anfetamina()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->alucinogenos()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->inhalables()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->sedantes()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->opiaceos()->preguntaUno()->numero());
        $this->assertSame('1', $this->prueba->sustancia()->otros()->preguntaUno()->numero());
    }

    public function testPreguntaUnoDevuelveExcepcionSiFaltaAlgunCampo()
    {
        $this->expectException(InvalidArgumentException::class);
        $p = new PreguntaUno('', ['1' => 'Sí']);
    }

    public function testPreguntaUnoCambiaDeNumeroATextoYViceversa()
    {
        $p = new PreguntaUno('1', ['1' => 'Sí']);
        $this->assertSame('Sí', $p->texto());
        $p = new PreguntaUno('Sí', ['1' => 'Sí']);
        $this->assertSame('1', $p->numero());
    }

    public function testPreguntaDevuelveExcepcionSiFaltaAlgunCampo()
    {
        $this->expectException(InvalidArgumentException::class);
        $p1 = new PreguntaUno('1', ['1' => 'Sí']);
        $consume =  new Consume($p1);
        $p = new Pregunta('', ['1' => 'Sí'],$consume);
    }

    public function testPreguntaCambiaDeNumeroATextoYViceversa()
    {
        $p = new PreguntaUno('1', ['1' => 'Sí']);
        $this->assertSame('Sí', $p->texto());
        $consume =  new Consume($p);

        $p1 = new Pregunta('1', ['1' => 'Sí'], $consume);
        $this->assertSame('Sí', $p->texto());
        $p2 = new Pregunta('Sí', ['1' => 'Sí'], $consume);
        $this->assertSame('1', $p->numero());

        $p1 = new PreguntaUno('2', ['2' => 'No']);
        $consume =  new Consume($p1);
        $p = new Pregunta('1', ['0' => 'asssss','2' => 'eeeeee'], $consume);
        $this->assertSame('0',$p->numero());

        $p1 = new PreguntaUno('2', ['2' => 'No']);
        $consume =  new Consume($p1);
        $p = new Pregunta('1', ['0' => 'asssss','2' => 'eeeeee'], $consume);
        $this->assertSame('asssss',$p->texto());
    }

    public function testOtrosDevuelveElNombreCorrecto()
    {
        $this->assertSame('Floripondio', $this->prueba->sustancia()->otros()->nombre());
    }
}