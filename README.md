[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsvaldoGDelRio/assist-php/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/assist-php/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/OsvaldoGDelRio/assist-php/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/assist-php/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/assist-php/badges/build.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/assist-php/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/assist-php/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)
# assist-php
Librería para el cuestionario ASSIST en PHP

Prueba de detección de consumo alcohol, tabaco y sustancias ASSIST

La prueba de detección de consumo alcohol, tabaco y sustancias ASSIST por sus siglas en ingles (“The Alcohol, Smoking and Substance Involvement Screening Test) fue elaborada por la Organización Mundial de la Salud en el año 2011. Existe un extenso soporte bibliográfico de la prueba y sus complementos. En caso de que estés interesado o interesada en aprender más sobre esta prueba, puedes tomar el curso directamente en el aula virtual de la OMS-OPS aquí:

https://www.campusvirtualsp.org/es/

Y puedes descargar los materiales de apoyo del curso en el mismo sitio o bien dando clic en cada uno de ellos:

[Manual ASSIST](https://riide.org.mx/wp-content/uploads/2018/10/consumo-sustancias-Assist-manual.pdf)

[Manual intervención breve](https://riide.org.mx/wp-content/uploads/2018/10/Consumo-de-sustancias-Intervencion-breve.pdf)

[Manual auto – ayuda](https://riide.org.mx/wp-content/uploads/2018/10/Consumo-sustancias-Auto-ayuda.pdf)

### Instalación
```shell
composer require osvaldogdelrio/assist-php
```

### Dependencias

Factory

```shell
composer require osvaldogdelrio/factory
```

### Uso

Apartir de un array con los datos, ya sea que vengan de un formulario o de la base de datos, la clase puede recibir los datos de forma numérica o texto.

```php
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
```
Creamos un Factory de la prueba con los siguientes parametros:

```php
$factory = new Factory();
$assist = $factory->crear('src\factory\PruebaAssist',$formulario);
```

Con esto podremos acceder a las preguntas por cada sustancia, así como los riesgos
```php
// SUSTANCIAS
// $assist->sustancia()->{SUSTANCIA}()->{NUMERO_DE_PREGUNTA}()->{FORMA_DEL_VALOR}();
echo $assist->sustancia()->tabaco()->preguntaUno()->texto();
echo $assist->sustancia()->tabaco()->preguntaUno()->numero();

//RIESGOS
//$assist->riesgo()->{SUSTANCIA}()->{FORMA_DEL_VALOR}();
echo $assist->riesgo()->tabaco()->numero();
echo $assist->riesgo()->tabaco()->texto();
echo $assist->riesgo()->tabaco()->intervencion();
```
### Ejemplo sencillo de implementación

En la carpeta web se encuentra el formulario con BOOTSTRAP y muestra los resultados con CKEDITOR 4

[Ejmeplo](https://assist.ticsa.org.mx/)

### Información de la prueba

Objetivo de la prueba

La prueba es un cuestionario que tiene como propósitos detectar el consumo de sustancias (tabaco, alcohol, cannabis, cocaína, estimulantes de tipo anfetamina, inhalables, sedantes o pastillas para dormir –benzodiacepinas–, alucinógenos, opiáceos y otras drogas), identificar el nivel de riesgo por el consumo de drogas y el tipo de intervención más adecuada para el/la usuario/a.

Descripción general del instrumento

El cuestionario consta de ocho preguntas que obtienen información sobre el consumo de drogas que ha tenido alguna vez en la vida, la frecuencia de consumo en los últimos tres meses, el deseo por consumir sustancias, los problemas que se han ocasionado y las actividades no
realizadas debido al consumo, la preocupación de personas cercanas e intentos por disminuir o dejar el consumo y el consumo de drogas inyectables.


Procedimiento de aplicación

Antes de aplicar el cuestionario es necesario que cuente con un ejemplar impreso del mismo, de forma que pueda ir leyendo y haciendo las preguntas correspondientes al/la usuario/a del servicio. Comente al/la usuario/a que le aplicará un breve cuestionario que tiene como objetivo conocer la situación de su consumo de alcohol, tabaco y otras drogas, identificar los posibles riesgos por el consumo de sustancias, así como la intervención terapéutica que puede serle de mayor utilidad de acuerdo a su situación personal.

Enseguida exprésele que para conocer esta información le hará algunas preguntas que debe contestar con toda sinceridad, tal y como le han ocurrido. Al término de la entrevista agradezca la cooperación del/la usuario/a. La realización del cuestionario lleva aproximadamente de 5 a 10 minutos.

Puntuación

El reactivo o pregunta 1 (¿Alguna vez en su vida ha consumido?) no tiene puntaje, pero permite identificar todas las drogas que alguna vez ha consumido el/la usuario/a y que requieren evaluarse en los siguientes reactivos (del 2 al 7).

En las tablas donde aparecen cada una de las preguntas (de la 2 a la 7) está indicado el puntaje correspondiente, de acuerdo a la respuesta seleccionada para cada sustancia. El reactivo 8 (¿Alguna vez ha consumido alguna droga por vía inyectada?) tampoco se puntúa.

Recomendaciones de aplicación

Aplique el instrumento cuando el/la usuario/a está estable en sus condiciones de salud física y presente ideas claras. A fin de facilitarle al usuario identificar las respuestas que corresponden a cada diferente sustancia(s) de consumo proporciónele el tarjetón de sustancias de consumo; y para que le sea más fácil elegir las opciones de respuestas posibles para los reactivos del 2 al 5 (referentes a la ocurrencia en los últimos tres meses) y del 6 al 8 (referentes a la ocurrencia alguna vez en la vida) proporciónele el tarjetón de respuestas. Asegúrese de haber aplicado todas las preguntas con el registro en el cuestionario de sus respectivas respuestas. Al finalizar el cuestionario exprésele su reconocimiento al/la usuario/a por el desempeño conveniente que haya mostrado durante la aplicación del mismo, por ejemplo: por el esfuerzo de concentrarse para proporcionar la información solicitada, responder de manera precisa, expresar sus dudas, etcétera.

[Más información de la prueba](https://riide.org.mx/prueba-de-deteccion-de-consumo-alcohol-tabaco-y-sustancias-assist/)