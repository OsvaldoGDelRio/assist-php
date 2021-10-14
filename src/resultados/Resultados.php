<?php
namespace src\resultados;

use src\PruebaAssist;

class Resultados
{
    private PruebaAssist $_assist;

    public function __construct(PruebaAssist $pruebaAssist)
    {
        $this->_assist = $pruebaAssist;
    }

    public function array(): array
    {
        return $this->convertir();
    }

    public function json(): string
    {
        return json_encode($this->convertir());
    }

    public function object(): object
    {
        return json_decode($this->json());
    }

    private function convertir(): array
    {
        return [
            'preguntas' => [
                'uno' => [
                    'sustancias' => [
                        'tabaco' => [
                            'texto' => $this->_assist->sustancia()->tabaco()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->tabaco()->preguntaUno()->numero()
                        ],
                        'alcohol' => [
                            'texto' => $this->_assist->sustancia()->alcohol()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->alcohol()->preguntaUno()->numero()
                        ],
                        'cannabis' => [
                            'texto' => $this->_assist->sustancia()->cannabis()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->cannabis()->preguntaUno()->numero()
                        ],
                        'cocaina' => [
                            'texto' => $this->_assist->sustancia()->cocaina()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->cocaina()->preguntaUno()->numero()
                        ],
                        'anfetamina' => [
                            'texto' => $this->_assist->sustancia()->anfetamina()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->anfetamina()->preguntaUno()->numero()
                        ],
                        'inhalables' => [
                            'texto' => $this->_assist->sustancia()->inhalables()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->inhalables()->preguntaUno()->numero()
                        ],
                        'sedantes' => [
                            'texto' => $this->_assist->sustancia()->sedantes()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->sedantes()->preguntaUno()->numero()
                        ],
                        'alucinogenos' => [
                            'texto' => $this->_assist->sustancia()->alucinogenos()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->alucinogenos()->preguntaUno()->numero()
                        ],
                        'opiaceos' => [
                            'texto' => $this->_assist->sustancia()->opiaceos()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->opiaceos()->preguntaUno()->numero()
                        ],
                        'otros' => [
                            'texto' => $this->_assist->sustancia()->otros()->preguntaUno()->texto(),
                            'numero' => $this->_assist->sustancia()->otros()->preguntaUno()->numero(),
                            'nombre' => $this->_assist->sustancia()->otros()->nombre()
                        ],
                    ]
                ],
                'dos' => [
                    'sustancias' => [
                        'tabaco' => [
                            'texto' => $this->_assist->sustancia()->tabaco()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->tabaco()->preguntaDos()->numero()
                        ],
                        'alcohol' => [
                            'texto' => $this->_assist->sustancia()->alcohol()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->alcohol()->preguntaDos()->numero()
                        ],
                        'cannabis' => [
                            'texto' => $this->_assist->sustancia()->cannabis()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->cannabis()->preguntaDos()->numero()
                        ],
                        'cocaina' => [
                            'texto' => $this->_assist->sustancia()->cocaina()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->cocaina()->preguntaDos()->numero()
                        ],
                        'anfetamina' => [
                            'texto' => $this->_assist->sustancia()->anfetamina()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->anfetamina()->preguntaDos()->numero()
                        ],
                        'inhalables' => [
                            'texto' => $this->_assist->sustancia()->inhalables()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->inhalables()->preguntaDos()->numero()
                        ],
                        'sedantes' => [
                            'texto' => $this->_assist->sustancia()->sedantes()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->sedantes()->preguntaDos()->numero()
                        ],
                        'alucinogenos' => [
                            'texto' => $this->_assist->sustancia()->alucinogenos()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->alucinogenos()->preguntaDos()->numero()
                        ],
                        'opiaceos' => [
                            'texto' => $this->_assist->sustancia()->opiaceos()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->opiaceos()->preguntaDos()->numero()
                        ],
                        'otros' => [
                            'texto' => $this->_assist->sustancia()->otros()->preguntaDos()->texto(),
                            'numero' => $this->_assist->sustancia()->otros()->preguntaDos()->numero(),
                            'nombre' => $this->_assist->sustancia()->otros()->nombre()
                        ],
                    ]
                ],
                'tres' => [
                    'sustancias' => [
                        'tabaco' => [
                            'texto' => $this->_assist->sustancia()->tabaco()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->tabaco()->preguntaTres()->numero()
                        ],
                        'alcohol' => [
                            'texto' => $this->_assist->sustancia()->alcohol()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->alcohol()->preguntaTres()->numero()
                        ],
                        'cannabis' => [
                            'texto' => $this->_assist->sustancia()->cannabis()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->cannabis()->preguntaTres()->numero()
                        ],
                        'cocaina' => [
                            'texto' => $this->_assist->sustancia()->cocaina()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->cocaina()->preguntaTres()->numero()
                        ],
                        'anfetamina' => [
                            'texto' => $this->_assist->sustancia()->anfetamina()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->anfetamina()->preguntaTres()->numero()
                        ],
                        'inhalables' => [
                            'texto' => $this->_assist->sustancia()->inhalables()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->inhalables()->preguntaTres()->numero()
                        ],
                        'sedantes' => [
                            'texto' => $this->_assist->sustancia()->sedantes()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->sedantes()->preguntaTres()->numero()
                        ],
                        'alucinogenos' => [
                            'texto' => $this->_assist->sustancia()->alucinogenos()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->alucinogenos()->preguntaTres()->numero()
                        ],
                        'opiaceos' => [
                            'texto' => $this->_assist->sustancia()->opiaceos()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->opiaceos()->preguntaTres()->numero()
                        ],
                        'otros' => [
                            'texto' => $this->_assist->sustancia()->otros()->preguntaTres()->texto(),
                            'numero' => $this->_assist->sustancia()->otros()->preguntaTres()->numero(),
                            'nombre' => $this->_assist->sustancia()->otros()->nombre()
                        ],
                    ]
                ],
                'cuatro' => [
                    'sustancias' => [
                        'tabaco' => [
                            'texto' => $this->_assist->sustancia()->tabaco()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->tabaco()->preguntaCuatro()->numero()
                        ],
                        'alcohol' => [
                            'texto' => $this->_assist->sustancia()->alcohol()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->alcohol()->preguntaCuatro()->numero()
                        ],
                        'cannabis' => [
                            'texto' => $this->_assist->sustancia()->cannabis()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->cannabis()->preguntaCuatro()->numero()
                        ],
                        'cocaina' => [
                            'texto' => $this->_assist->sustancia()->cocaina()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->cocaina()->preguntaCuatro()->numero()
                        ],
                        'anfetamina' => [
                            'texto' => $this->_assist->sustancia()->anfetamina()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->anfetamina()->preguntaCuatro()->numero()
                        ],
                        'inhalables' => [
                            'texto' => $this->_assist->sustancia()->inhalables()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->inhalables()->preguntaCuatro()->numero()
                        ],
                        'sedantes' => [
                            'texto' => $this->_assist->sustancia()->sedantes()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->sedantes()->preguntaCuatro()->numero()
                        ],
                        'alucinogenos' => [
                            'texto' => $this->_assist->sustancia()->alucinogenos()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->alucinogenos()->preguntaCuatro()->numero()
                        ],
                        'opiaceos' => [
                            'texto' => $this->_assist->sustancia()->opiaceos()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->opiaceos()->preguntaCuatro()->numero()
                        ],
                        'otros' => [
                            'texto' => $this->_assist->sustancia()->otros()->preguntaCuatro()->texto(),
                            'numero' => $this->_assist->sustancia()->otros()->preguntaCuatro()->numero(),
                            'nombre' => $this->_assist->sustancia()->otros()->nombre()
                        ],
                    ]
                ],
                'cinco' => [
                    'sustancias' => [
                        'alcohol' => [
                            'texto' => $this->_assist->sustancia()->alcohol()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->alcohol()->preguntaCinco()->numero()
                        ],
                        'cannabis' => [
                            'texto' => $this->_assist->sustancia()->cannabis()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->cannabis()->preguntaCinco()->numero()
                        ],
                        'cocaina' => [
                            'texto' => $this->_assist->sustancia()->cocaina()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->cocaina()->preguntaCinco()->numero()
                        ],
                        'anfetamina' => [
                            'texto' => $this->_assist->sustancia()->anfetamina()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->anfetamina()->preguntaCinco()->numero()
                        ],
                        'inhalables' => [
                            'texto' => $this->_assist->sustancia()->inhalables()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->inhalables()->preguntaCinco()->numero()
                        ],
                        'sedantes' => [
                            'texto' => $this->_assist->sustancia()->sedantes()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->sedantes()->preguntaCinco()->numero()
                        ],
                        'alucinogenos' => [
                            'texto' => $this->_assist->sustancia()->alucinogenos()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->alucinogenos()->preguntaCinco()->numero()
                        ],
                        'opiaceos' => [
                            'texto' => $this->_assist->sustancia()->opiaceos()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->opiaceos()->preguntaCinco()->numero()
                        ],
                        'otros' => [
                            'texto' => $this->_assist->sustancia()->otros()->preguntaCinco()->texto(),
                            'numero' => $this->_assist->sustancia()->otros()->preguntaCinco()->numero(),
                            'nombre' => $this->_assist->sustancia()->otros()->nombre()
                        ],
                    ]
                ],
                'seis' => [
                    'sustancias' => [
                        'tabaco' => [
                            'texto' => $this->_assist->sustancia()->tabaco()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->tabaco()->preguntaSeis()->numero()
                        ],
                        'alcohol' => [
                            'texto' => $this->_assist->sustancia()->alcohol()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->alcohol()->preguntaSeis()->numero()
                        ],
                        'cannabis' => [
                            'texto' => $this->_assist->sustancia()->cannabis()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->cannabis()->preguntaSeis()->numero()
                        ],
                        'cocaina' => [
                            'texto' => $this->_assist->sustancia()->cocaina()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->cocaina()->preguntaSeis()->numero()
                        ],
                        'anfetamina' => [
                            'texto' => $this->_assist->sustancia()->anfetamina()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->anfetamina()->preguntaSeis()->numero()
                        ],
                        'inhalables' => [
                            'texto' => $this->_assist->sustancia()->inhalables()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->inhalables()->preguntaSeis()->numero()
                        ],
                        'sedantes' => [
                            'texto' => $this->_assist->sustancia()->sedantes()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->sedantes()->preguntaSeis()->numero()
                        ],
                        'alucinogenos' => [
                            'texto' => $this->_assist->sustancia()->alucinogenos()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->alucinogenos()->preguntaSeis()->numero()
                        ],
                        'opiaceos' => [
                            'texto' => $this->_assist->sustancia()->opiaceos()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->opiaceos()->preguntaSeis()->numero()
                        ],
                        'otros' => [
                            'texto' => $this->_assist->sustancia()->otros()->preguntaSeis()->texto(),
                            'numero' => $this->_assist->sustancia()->otros()->preguntaSeis()->numero(),
                            'nombre' => $this->_assist->sustancia()->otros()->nombre()
                        ],
                    ]
                ],
                'siete' => [
                    'sustancias' => [
                        'tabaco' => [
                            'texto' => $this->_assist->sustancia()->tabaco()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->tabaco()->preguntaSiete()->numero()
                        ],
                        'alcohol' => [
                            'texto' => $this->_assist->sustancia()->alcohol()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->alcohol()->preguntaSiete()->numero()
                        ],
                        'cannabis' => [
                            'texto' => $this->_assist->sustancia()->cannabis()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->cannabis()->preguntaSiete()->numero()
                        ],
                        'cocaina' => [
                            'texto' => $this->_assist->sustancia()->cocaina()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->cocaina()->preguntaSiete()->numero()
                        ],
                        'anfetamina' => [
                            'texto' => $this->_assist->sustancia()->anfetamina()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->anfetamina()->preguntaSiete()->numero()
                        ],
                        'inhalables' => [
                            'texto' => $this->_assist->sustancia()->inhalables()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->inhalables()->preguntaSiete()->numero()
                        ],
                        'sedantes' => [
                            'texto' => $this->_assist->sustancia()->sedantes()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->sedantes()->preguntaSiete()->numero()
                        ],
                        'alucinogenos' => [
                            'texto' => $this->_assist->sustancia()->alucinogenos()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->alucinogenos()->preguntaSiete()->numero()
                        ],
                        'opiaceos' => [
                            'texto' => $this->_assist->sustancia()->opiaceos()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->opiaceos()->preguntaSiete()->numero()
                        ],
                        'otros' => [
                            'texto' => $this->_assist->sustancia()->otros()->preguntaSiete()->texto(),
                            'numero' => $this->_assist->sustancia()->otros()->preguntaSiete()->numero(),
                            'nombre' => $this->_assist->sustancia()->otros()->nombre()
                        ],
                    ]
                ]
            ],
            'riesgos' => [
                'tabaco' => [
                    'puntos' => $this->_assist->riesgo()->tabaco()->numero(),
                    'riesgo' => $this->_assist->riesgo()->tabaco()->texto(),
                    'intervencion' => $this->_assist->riesgo()->tabaco()->intervencion()
                ],
                'alcohol' => [
                    'puntos' => $this->_assist->riesgo()->alcohol()->numero(),
                    'riesgo' => $this->_assist->riesgo()->alcohol()->texto(),
                    'intervencion' => $this->_assist->riesgo()->alcohol()->intervencion()
                ],
                'cannabis' => [
                    'puntos' => $this->_assist->riesgo()->cannabis()->numero(),
                    'riesgo' => $this->_assist->riesgo()->cannabis()->texto(),
                    'intervencion' => $this->_assist->riesgo()->cannabis()->intervencion()
                ],
                'cocaina' => [
                    'puntos' => $this->_assist->riesgo()->cocaina()->numero(),
                    'riesgo' => $this->_assist->riesgo()->cocaina()->texto(),
                    'intervencion' => $this->_assist->riesgo()->cocaina()->intervencion()
                ],
                'anfetamina' => [
                    'puntos' => $this->_assist->riesgo()->anfetamina()->numero(),
                    'riesgo' => $this->_assist->riesgo()->anfetamina()->texto(),
                    'intervencion' => $this->_assist->riesgo()->anfetamina()->intervencion()
                ],
                'inhalables' => [
                    'puntos' => $this->_assist->riesgo()->inhalables()->numero(),
                    'riesgo' => $this->_assist->riesgo()->inhalables()->texto(),
                    'intervencion' => $this->_assist->riesgo()->inhalables()->intervencion()
                ],
                'sedantes' => [
                    'puntos' => $this->_assist->riesgo()->sedantes()->numero(),
                    'riesgo' => $this->_assist->riesgo()->sedantes()->texto(),
                    'intervencion' => $this->_assist->riesgo()->sedantes()->intervencion()
                ],
                'alucinogenos' => [
                    'puntos' => $this->_assist->riesgo()->alucinogenos()->numero(),
                    'riesgo' => $this->_assist->riesgo()->alucinogenos()->texto(),
                    'intervencion' => $this->_assist->riesgo()->alucinogenos()->intervencion()
                ],
                'opiaceos' => [
                    'puntos' => $this->_assist->riesgo()->opiaceos()->numero(),
                    'riesgo' => $this->_assist->riesgo()->opiaceos()->texto(),
                    'intervencion' => $this->_assist->riesgo()->opiaceos()->intervencion()
                ],
                'otros' => [
                    'puntos' => $this->_assist->riesgo()->otros()->numero(),
                    'riesgo' => $this->_assist->riesgo()->otros()->texto(),
                    'intervencion' => $this->_assist->riesgo()->otros()->intervencion(),
                    'nombre' => $this->_assist->sustancia()->otros()->nombre()
                ],
            ]

        ];
    }
}
