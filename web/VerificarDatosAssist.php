<?php declare(strict_types=1);
if(!isset($_POST['tabaco1']))
{
    header('Location: http://localhost/assist-php/web/index.php');
}
use src\Factory;
require_once __DIR__ . '/../vendor/autoload.php';
$factory = new Factory();
$formulario = [];

foreach ($_POST as $key => $value) {
    $formulario[$key] = htmlentities($value);
    $formulario[$key] = strip_tags($value);
}

$assist = $factory->crear('src\factory\PruebaAssist',$formulario);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultados prueba de ASSIST</title>
        <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    </head>
    <body>
    <h1>Resultados de la prueba</h1>
    <textarea name="editor1" id="editor1" rows="10" cols="80">
    Nombre:
    <p></p>
    <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<thead>
		<tr>
			<th colspan="2" rowspan="1" scope="row" style="text-align: left;">1. &iquest;Alguna vez ha consumido?</th>
			<th colspan="3" rowspan="1" scope="row">
			<p style="text-align:left">2. En&nbsp;los&nbsp;&uacute;ltimos&nbsp;tres&nbsp;meses, &iquest;con&nbsp;qu&eacute; frecuencia&nbsp;ha&nbsp;consumido&nbsp;las&nbsp;sustancias&nbsp;que&nbsp;mencion&oacute;?&nbsp;(S&iacute;&nbsp;haber&nbsp;consumido)</p>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row" style="text-align:left">Tabaco</th>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Tabaco</th>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alcohol</th>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Alcohol</th>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Cannabis</th>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Cannabis</th>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Coca&iacute;na</th>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Coca&iacute;na</th>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Estimulantes de tipo anfetamina</th>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Estimulantes de tipo anfetamina</th>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Inhalables</th>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Inhalables</th>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Sedantes o pastillas para dormir</th>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Sedantes o pastillas para dormir</th>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alucin&oacute;genos</th>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Alucin&oacute;genos</th>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Opi&aacute;ceos</th>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Opi&aacute;ceos</th>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaDos()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left"><?php echo $assist->sustancia()->otros()->nombre(); ?></th>
			<td><?php echo $assist->sustancia()->otros()->preguntaUno()->texto(); ?></td>
			<th scope="row" style="text-align:left">Otros</th>
			<td><?php echo $assist->sustancia()->otros()->preguntaDos()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->otros()->preguntaDos()->numero(); ?></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<thead>
		<tr>
			<th colspan="3" rowspan="1" scope="row">
			<p style="text-align:left">3.&nbsp;En&nbsp;los&nbsp;&uacute;ltimos&nbsp;tres&nbsp;meses, &iquest;con&nbsp;qu&eacute; frecuencia&nbsp;ha&nbsp;sentido&nbsp;un&nbsp;fuerte&nbsp;deseo&nbsp;o&nbsp;ansia&nbsp;de&nbsp;consumir (mencionar&nbsp;la(s)&nbsp;droga(s)&nbsp;que&nbsp;ha&nbsp;consumido)?</p>
			</th>
			<th colspan="3" rowspan="1" scope="row">
			<p style="text-align:left">4<span style="text-align:left">. </span>En los &uacute;ltimos tres meses, &iquest;con qu&eacute; frecuencia el consumo de&hellip; (mencionar la(s) droga(s) que ha consumido) le ha causado problemas de salud, sociales,legales o econ&oacute;micos?</p>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row" style="text-align:left">Tabaco</th>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Tabaco</th>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alcohol</th>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Alcohol</th>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Cannabis</th>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Cannabis</th>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Coca&iacute;na</th>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Coca&iacute;na</th>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Estimulantes de tipo anfetamina</th>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Estimulantes de tipo anfetamina</th>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Inhalables</th>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Inhalables</th>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Sedantes o pastillas para dormir</th>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Sedantes o pastillas para dormir</th>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alucin&oacute;genos</th>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Alucin&oacute;genos</th>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Opi&aacute;ceos</th>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Opi&aacute;ceos</th>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaCuatro()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Otros</th>
			<td><?php echo $assist->sustancia()->otros()->preguntaTres()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->otros()->preguntaTres()->numero(); ?></td>
			<th scope="row" style="text-align:left">Otros</th>
			<td><?php echo $assist->sustancia()->otros()->preguntaCuatro()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->otros()->preguntaCuatro()->numero(); ?></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<thead>
		<tr>
			<th colspan="3" rowspan="1" scope="row">
			<p style="text-align:left">5. En los &uacute;ltimos tres meses, &iquest;con qu&eacute; frecuencia dej&oacute; de hacer lo que habitualmente se esperaba de usted por el consumo de&hellip; (mencionar la(s) droga(s) que ha consumido)?</p>
			</th>
			<th colspan="4" rowspan="1" scope="row">
			<p style="text-align:left">6. En los &uacute;ltimos tres meses, &iquest;con qu&eacute; frecuencia el consumo de&hellip; (mencionar la(s) droga(s) que ha consumido) le ha causado problemas de salud, sociales,legales o econ&oacute;micos?</p>
			</th>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">&nbsp;</th>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<th scope="row" style="text-align:left">Tabaco</th>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alcohol</th>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Alcohol</th>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Cannabis</th>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Cannabis</th>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Coca&iacute;na</th>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Coca&iacute;na</th>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Estimulantes de tipo anfetamina</th>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Estimulantes de tipo anfetamina</th>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Inhalables</th>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Inhalables</th>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Sedantes o pastillas para dormir</th>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Sedantes o pastillas para dormir</th>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alucin&oacute;genos</th>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Alucin&oacute;genos</th>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Opi&aacute;ceos</th>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Opi&aacute;ceos</th>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaSeis()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Otros</th>
			<td><?php echo $assist->sustancia()->otros()->preguntaCinco()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->otros()->preguntaCinco()->numero(); ?></td>
			<th scope="row" style="text-align:left">Otros</th>
			<td><?php echo $assist->sustancia()->otros()->preguntaSeis()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->otros()->preguntaSeis()->numero(); ?></td>
		</tr>
	</thead>
</table>

<p>&nbsp;</p>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<thead>
		<tr>
			<th colspan="3" scope="row">
			<p style="text-align:left">7. &iquest;Ha intentado alguna vez reducir o eliminar el consumo de&hellip; (mencionar la(s) droga(s) que ha consumido)?</p>
			</th>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Tabaco</th>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->tabaco()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alcohol</th>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alcohol()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Cannabis</th>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cannabis()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Coca&iacute;na</th>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->cocaina()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Estimulantes de tipo anfetamina</th>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->anfetamina()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Inhalables</th>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->inhalables()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Sedantes o pastillas para dormir</th>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->sedantes()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alucin&oacute;genos</th>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->alucinogenos()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Opi&aacute;ceos</th>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->opiaceos()->preguntaSiete()->numero(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Otros</th>
			<td><?php echo $assist->sustancia()->otros()->preguntaSiete()->texto(); ?></td>
			<td><?php echo $assist->sustancia()->otros()->preguntaSiete()->numero(); ?></td>
		</tr>
	</thead>
</table>

<p>&nbsp;</p>

<p><strong>8. &iquest;Alguna vez ha consumido alguna droga por v&iacute;a inyectada?</strong></p>

<h3>Resultados</h3>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<thead>
		<tr>
			<th scope="row">Sustancia</th>
			<th scope="col">Puntuaci&oacute;n</th>
			<th scope="col">Riesgo</th>
			<th scope="col">Intervenci&oacute;n</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row" style="text-align:left">Tabaco</th>
			<td><?php echo $assist->riesgo()->tabaco()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->tabaco()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->tabaco()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alcohol</th>
			<td><?php echo $assist->riesgo()->alcohol()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->alcohol()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->alcohol()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Cannabis</th>
			<td><?php echo $assist->riesgo()->cannabis()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->cannabis()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->cannabis()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Coca&iacute;na</th>
			<td><?php echo $assist->riesgo()->cocaina()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->cocaina()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->cocaina()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Estimulantes de tipo anfetamina</th>
			<td><?php echo $assist->riesgo()->anfetamina()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->anfetamina()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->anfetamina()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Inhalables</th>
			<td><?php echo $assist->riesgo()->inhalables()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->inhalables()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->inhalables()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Sedantes o pastillas para dormir</th>
			<td><?php echo $assist->riesgo()->sedantes()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->sedantes()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->sedantes()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Alucin&oacute;genos</th>
			<td><?php echo $assist->riesgo()->alucinogenos()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->alucinogenos()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->alucinogenos()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Opi&aacute;ceos</th>
			<td><?php echo $assist->riesgo()->opiaceos()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->opiaceos()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->opiaceos()->intervencion(); ?></td>
		</tr>
		<tr>
			<th scope="row" style="text-align:left">Otros</th>
			<td><?php echo $assist->riesgo()->otros()->numero(); ?></td>
			<td><?php echo $assist->riesgo()->otros()->texto(); ?></td>
			<td><?php echo $assist->riesgo()->otros()->intervencion(); ?></td>
		</tr>
	</tbody>
</table>


    </textarea>
    </body>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</html>
