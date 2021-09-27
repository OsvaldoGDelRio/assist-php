<?php declare(strict_types=1); header('Set-Cookie: cross-site-cookie=bar; SameSite=None; Secure', false); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prueba de ASSIST</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
<body>
<div class="container">
    <h1 class="display-3">ASSIST</h1>
    <p class="text-justify"><strong>INTRUCCIONES:</strong> Las siguientes preguntas se refieren a la experiencia del paciente en el consumo de alcohol, tabaco y otras drogas a lo largo de la vida y en los últimos tres meses. Es probable que algunas de estas sustancias puedan haber sido recetadas por el médico (como en el caso de las anfetaminas, los sedantes y los analgésicos), por lo que en este cuestionario no se registrarán los medicamentos que fueron recetados por él. Sin embargo, si ha tomado tales medicamentos por otras razones que no sean por motivos de salud o las ha tomado más a menudo o en dosis más altas que las recetadas, pida que el paciente se lo comente y registre.</p>
    <form method="POST" action="VerificarDatosAssist.php">
    <div id="accordion" role="tablist">    
    <!--Pregunta 1-->
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h6 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. ¿Alguna vez en su vida ha consumido?</a>
                    </h6>
                </div>
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">  
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left"></th>
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col" class="text-center">Sí</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">a. Tabaco</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="tabaco1" id="TABACO" onchange="Enable(this.value,this.id)" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" onchange="Enable(this.value,this.id)" name="tabaco1" id="TABACO" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">b. Bebidas alcohólicas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="alcohol1" id="ALCOHOL1" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="alcohol1" id="ALCOHOL" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">c. Cannabis</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="cannabis1" id="CANNABIS1" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="cannabis1" id="CANNABIS" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">d. Cocaina</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="cocaina1" id="COCAINA1" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="cocaina1" id="COCAINA" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">e. Estimulantes de tipo anfetaminas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="anfetamina1" id="ANFETAMINA1" value="2" checked>
                                                    </label>
                                                </div> 
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="anfetamina1" id="ANFETAMINA" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">f. Inhalables</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="inhalables1" id="INHALABLES1" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="inhalables1" id="INHALABLES" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">g. Sedantes o pastillas para dormir</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="sedantes1" id="SEDANTES1" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="sedantes1" id="SEDANTES" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">h. Alucinógenos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="alucinogenos1" id="ALUCINOGENOS1" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="alucinogenos1" id="ALUCINOGENOS" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">i. Opiáceos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="opiaceos1" id="OPIACEOS1" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="opiaceos1" id="OPIACEOS" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">j. Otros (Especifique el nombre)
                                                    <input type="text" name="otrosNombre" class="form-control" value="Otros">
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="otros1" id="OTROS1" value="2" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="otros1" id="OTROS" onchange="Enable(this.value,this.id)" value="1">
                                                    </label>
                                                </div>                           
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                            <div class="col-md-4">
                                <br>
                                <br>
                                <div class="card">
                                    <div class="card-body">                   
                                        <p class="text-center">Si todas las respuestas son negativas, pregunte:</p>
                                        <p class="text-center">¿Cuándo era estudiante consumió alguna droga?</p>
                                        <p class="text-center">Si la respuesta es negativa para todas las sustancias, detenga la entrevista.</p>
                                        <p class="text-center">Si la respuesta es afirmativa a cualquiera de las sustancias, haga la pregunta 2 para cada droga que se haya consumido alguna vez.</p>
                                    </div>
                                </div>
                            </div> 
                        </div>   
                    </div>
                </div>
            </div>
            <!--Pregunta 2-->
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2. En los últimos tres meses, ¿con  qué frecuencia ha consumido las sustancias que mencionó? (Sí haber consumido)
                        </a>
                    </h6>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">  
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left"></th>
                                            <th scope="col" class="text-center">Nunca</th>
                                            <th scope="col" class="text-center">1 ó 2 veces</th>
                                            <th scope="col" class="text-center">Mensualmente</th>
                                            <th scope="col" class="text-center">Semanalmente</th>
                                            <th scope="col" class="text-center">Diario o casi diario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">a. Tabaco</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco2" id="TABACO_2" value="0" checked disabled>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco2" id="TABACO_21" value="2" disabled>
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco2" id="TABACO_22" value="3" disabled>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco2" id="TABACO_23" value="4" disabled>
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco2" id="TABACO_24" value="6" disabled>
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">b. Bebidas alcohólicas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol2" id="ALCOHOL_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol2" id="ALCOHOL_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol2" id="ALCOHOL_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol2" id="ALCOHOL_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol2" id="ALCOHOL_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">c. Cannabis</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis2" id="CANNABIS_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis2" id="CANNABIS_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis2" id="CANNABIS_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis2" id="CANNABIS_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis2" id="CANNABIS_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">d. Cocaina</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina2" id="COCAINA_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina2" id="COCAINA_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina2" id="COCAINA_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina2" id="COCAINA_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina2" id="COCAINA_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">e. Estimulantes detipo anfetaminas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina2" id="ANFETAMINA_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina2" id="ANFETAMINA_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina2" id="ANFETAMINA_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina2" id="ANFETAMINA_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina2" id="ANFETAMINA_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">f. Inhalables</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables2" id="INHALABLES_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables2" id="INHALABLES_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables2" id="INHALABLES_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables2" id="INHALABLES_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables2" id="INHALABLES_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">g. Sedantes o pastillas para dormir</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes2" id="SEDANTES_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes2" id="SEDANTES_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes2" id="SEDANTES_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes2" id="SEDANTES_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes2" id="SEDANTES_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">h. Alucinógenos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos2" id="ALUCINOGENOS_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos2" id="ALUCINOGENOS_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos2" id="ALUCINOGENOS_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos2" id="ALUCINOGENOS_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos2" id="ALUCINOGENOS_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">i. Opiáceos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos2" id="OPIACEOS_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos2" id="OPIACEOS_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos2" id="OPIACEOS_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos2" id="OPIACEOS_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos2" id="OPIACEOS_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">j. Otros (especifique)</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros2" id="OTROS_2" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros2" id="OTROS_21" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros2" id="OTROS_22" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros2" id="OTROS_23" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros2" id="OTROS_24" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>           
                            </div>
                            <div class="col-md-4">
                                <br>
                                <br>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="text-center">Si la respuesta es “nunca" en todas las sustancias, pase a la pregunta 6.</p>
                                        <p class="text-center">Si se ha consumido alguna sustancia de la pregunta 2, continúe con las preguntas 3, 4 y 5 para cada sustancia.</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!--Pregunta 3-->
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. En los últimos tres meses, ¿con qué frecuencia ha sentido un  fuerte  deseo  o  ansia  de consumir… (mencionar  la(s) droga(s) que ha consumido)?
                        </a>
                    </h6>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">                               
                            <div class="col-md-12">  
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left"></th>
                                            <th scope="col" class="text-center">Nunca</th>
                                            <th scope="col" class="text-center">1 ó 2 veces</th>
                                            <th scope="col" class="text-center">Mensualmente</th>
                                            <th scope="col" class="text-center">Semanalmente</th>
                                            <th scope="col" class="text-center">Diario o casi diario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">a. Tabaco</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco3" id="TABACO_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco3" id="TABACO_31" value="2">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco3" id="TABACO_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco3" id="TABACO_33" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco3" id="TABACO_34" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">b. Bebidas alcohólicas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol3" id="ALCOHOL_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol3" id="ALCOHOL_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol3" id="ALCOHOL_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol3" id="ALCOHOL_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol3" id="ALCOHOL_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">c. Cannabis</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis3" id="CANNABIS_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis3" id="CANNABIS_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis3" id="CANNABIS_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis3" id="CANNABIS_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis3" id="CANNABIS_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">d. Cocaina</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina3" id="COCAINA_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina3" id="COCAINA_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina3" id="COCAINA_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina3" id="COCAINA_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina3" id="COCAINA_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">e. Estimulantes detipo anfetaminas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina3" id="ANFETAMINA_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina3" id="ANFETAMINA_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina3" id="ANFETAMINA_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina3" id="ANFETAMINA_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina3" id="ANFETAMINA_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">f. Inhalables</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables3" id="INHALABLES_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables3" id="INHALABLES_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables3" id="INHALABLES_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables3" id="INHALABLES_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables3" id="INHALABLES_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">g. Sedantes o pastillas para dormir</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes3" id="SEDANTES_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes3" id="SEDANTES_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes3" id="SEDANTES_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes3" id="SEDANTES_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes3" id="SEDANTES_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">h. Alucinógenos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos3" id="ALUCINOGENOS_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos3" id="ALUCINOGENOS_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos3" id="ALUCINOGENOS_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos3" id="ALUCINOGENOS_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos3" id="ALUCINOGENOS_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">i. Opiáceos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos3" id="OPIACEOS_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos3" id="OPIACEOS_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos3" id="OPIACEOS_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos3" id="OPIACEOS_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos3" id="OPIACEOS_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">j. Otros (especifique)</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros3" id="OTROS_3" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros3" id="OTROS_31" value="2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros3" id="OTROS_32" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros3" id="OTROS_33" value="4">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros3" id="OTROS_34" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>              
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
            <!--Pregunta 4-->                  
            <div class="card">
                <div class="card-header" role="tab" id="headingFour">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. En los últimos tres meses, ¿con qué frecuencia el consumo  de… (mencionar la(s) droga(s) que ha consumido) le ha  causado problemas de salud, sociales,legales o económicos?
                        </a>
                    </h6>
                </div>
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">                               
                            <div class="col-md-12">  
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left"></th>
                                            <th scope="col" class="text-center">Nunca</th>
                                            <th scope="col" class="text-center">1 ó 2 veces</th>
                                            <th scope="col" class="text-center">Mensualmente</th>
                                            <th scope="col" class="text-center">Semanalmente</th>
                                            <th scope="col" class="text-center">Diario o casi diario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">a. Tabaco</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco4" id="TABACO_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco4" id="TABACO_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco4" id="TABACO_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco4" id="TABACO_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco4" id="TABACO_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">b. Bebidas alcohólicas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol4" id="ALCOHOL_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol4" id="ALCOHOL_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol4" id="ALCOHOL_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol4" id="ALCOHOL_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol4" id="ALCOHOL_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        <tr>
                                            <td class="text-left">c. Cannabis</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis4" id="CANNABIS_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis4" id="CANNABIS_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis4" id="CANNABIS_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis4" id="CANNABIS_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis4" id="CANNABIS_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">d. Cocaina</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina4" id="COCAINA_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina4" id="COCAINA_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina4" id="COCAINA_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina4" id="COCAINA_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina4" id="COCAINA_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">e. Estimulantes detipo anfetaminas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina4" id="ANFETAMINA_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina4" id="ANFETAMINA_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina4" id="ANFETAMINA_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina4" id="ANFETAMINA_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina4" id="ANFETAMINA_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">f. Inhalables</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables4" id="INHALABLES_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables4" id="INHALABLES_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables4" id="INHALABLES_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables4" id="INHALABLES_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables4" id="INHALABLES_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">g. Sedantes o pastillas para dormir</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes4" id="SEDANTES_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes4" id="SEDANTES_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes4" id="SEDANTES_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes4" id="SEDANTES_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes4" id="SEDANTES_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">h. Alucinógenos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos4" id="ALUCINOGENOS_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos4" id="ALUCINOGENOS_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos4" id="ALUCINOGENOS_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos4" id="ALUCINOGENOS_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos4" id="ALUCINOGENOS_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">i. Opiáceos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos4" id="OPIACEOS_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos4" id="OPIACEOS_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos4" id="OPIACEOS_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos4" id="OPIACEOS_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos4" id="OPIACEOS_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">j. Otros (especifique)</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros4" id="OTROS_4" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros4" id="OTROS_41" value="4">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros4" id="OTROS_42" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros4" id="OTROS_43" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros4" id="OTROS_44" value="7">
                                                    </label>
                                                </div>                            
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>                 
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
            <!--Pregunta 5-->                  
            <div class="card">
                <div class="card-header" role="tab" id="headingFive">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5. En los últimos tres meses, ¿con qué frecuencia dejó de hacer lo que habitualmente se esperaba  de  usted  por  el consumo de… (mencionar la(s) droga(s) que ha consumido)?
                        </a>
                    </h6>
                </div>
                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">                               
                            <div class="col-md-12">  
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left"></th>
                                            <th scope="col" class="text-center">Nunca</th>
                                            <th scope="col" class="text-center">1 ó 2 veces</th>
                                            <th scope="col" class="text-center">Mensualmente</th>
                                            <th scope="col" class="text-center">Semanalmente</th>
                                            <th scope="col" class="text-center">Diario o casi diario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">b. Bebidas alcohólicas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol5" id="ALCOHOL_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol5" id="ALCOHOL_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol5" id="ALCOHOL_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol5" id="ALCOHOL_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol5" id="ALCOHOL_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">c. Cannabis</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis5" id="CANNABIS_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis5" id="CANNABIS_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis5" id="CANNABIS_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis5" id="CANNABIS_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis5" id="CANNABIS_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">d. Cocaina</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina5" id="COCAINA_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina5" id="COCAINA_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina5" id="COCAINA_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina5" id="COCAINA_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina5" id="COCAINA_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">e. Estimulantes detipo anfetaminas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina5" id="ANFETAMINA_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina5" id="ANFETAMINA_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina5" id="ANFETAMINA_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina5" id="ANFETAMINA_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina5" id="ANFETAMINA_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">f. Inhalables</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables5" id="INHALABLES_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables5" id="INHALABLES_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables5" id="INHALABLES_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables5" id="INHALABLES_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables5" id="INHALABLES_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">g. Sedantes o pastillas para dormir</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes5" id="SEDANTES_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes5" id="SEDANTES_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes5" id="SEDANTES_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes5" id="SEDANTES_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes5" id="SEDANTES_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">h. Alucinógenos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos5" id="ALUCINOGENOS_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos5" id="ALUCINOGENOS_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos5" id="ALUCINOGENOS_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos5" id="ALUCINOGENOS_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos5" id="ALUCINOGENOS_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">i. Opiáceos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos5" id="OPIACEOS_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos5" id="OPIACEOS_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos5" id="OPIACEOS_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos5" id="OPIACEOS_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos5" id="OPIACEOS_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">j. Otros (especifique)</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros5" id="OTROS_5" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros5" id="OTROS_51" value="5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros5" id="OTROS_52" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros5" id="OTROS_53" value="7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros5" id="OTROS_54" value="8">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>              
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
            <!--Pregunta 6-->                  
            <div class="card">
                <div class="card-header" role="tab" id="headingSix">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6.  ¿Un  amigo,  un familiar  o alguien  más  alguna  vez  ha mostrado preocupación por sus hábitos   de   consumo (mencionar la(s) droga(s) que ha consumido)
                        </a>
                    </h6>
                </div>
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">                               
                            <div class="col-md-12">  
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left"></th>
                                            <th scope="col" class="text-center">Nunca</th>
                                            <th scope="col" class="text-center">Sí, en losúltimos3 meses</th>
                                            <th scope="col" class="text-center">Sí, pero no en los últimos 3meses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">a. Tabaco</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco6" id="TABACO_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco6" id="TABACO_61" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco6" id="TABACO_62" value="3">
                                                    </label>
                                                </div>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <td class="text-left">b. Bebidas alcohólicas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol6" id="ALCOHOL_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol6" id="ALCOHOL_61" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol6" id="ALCOHOL_62" value="3">
                                                    </label>
                                                </div>
                                            </td>             
                                        </tr>
                                        <tr>
                                            <td class="text-left">c. Cannabis</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis6" id="CANNABIS_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis6" id="CANNABIS_61" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis6" id="CANNABIS_62" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">d. Cocaina</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina6" id="COCAINA_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina6" id="COCAINA_61" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina6" id="COCAINA_62" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">e. Estimulantes detipo anfetaminas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina6" id="ANFETAMINA_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina6" id="ANFETAMINA_61" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina6" id="ANFETAMINA_62" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">f. Inhalables</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables6" id="INHALABLES_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables6" id="INHALABLES_61" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables6" id="INHALABLES_62" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">g. Sedantes o pastillas para dormir</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes6" id="SEDANTES_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes6" id="SEDANTES_61" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes6" id="SEDANTES_62" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">h. Alucinógenos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos6" id="ALUCINOGENOS_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos6" id="ALUCINOGENOS_61" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos6" id="ALUCINOGENOS_62" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">i. Opiáceos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos6" id="OPIACEOS_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos6" id="OPIACEOS_61" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos6" id="OPIACEOS_62" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">j. Otros (especifique)</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros6" id="OTROS_6" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros6" id="OTROS_61" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros6" id="OTROS_62" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>           
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
            <!--Pregunta 7-->                  
            <div class="card">
                <div class="card-header" role="tab" id="headingSeven">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7. ¿Ha intentado alguna vez reducir o eliminar el consumo de… (mencionar la(s) droga(s) que ha consumido)?                            
                        </a>
                    </h6>
                </div>
                <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">                               
                            <div class="col-md-12">  
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left"></th>
                                            <th scope="col" class="text-center">Nunca</th>
                                            <th scope="col" class="text-center">Sí, en losúltimos3 meses</th>
                                            <th scope="col" class="text-center">Sí, pero no en los últimos 3meses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">a. Tabaco</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco7" id="TABACO_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco7" id="TABACO_71" value="6">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="tabaco7" id="TABACO_72" value="3">
                                                    </label>
                                                </div>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <td class="text-left">b. Bebidas alcohólicas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol7" id="ALCOHOL_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol7" id="ALCOHOL_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alcohol7" id="ALCOHOL_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">c. Cannabis</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis7" id="CANNABIS_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis7" id="CANNABIS_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cannabis7" id="CANNABIS_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">d. Cocaina</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina7" id="COCAINA_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina7" id="COCAINA_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="cocaina7" id="COCAINA_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">e. Estimulantes detipo anfetaminas</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina7" id="ANFETAMINA_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina7" id="ANFETAMINA_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="anfetamina7" id="ANFETAMINA_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">f. Inhalables</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables7" id="INHALABLES_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables7" id="INHALABLES_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="inhalables7" id="INHALABLES_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">g. Sedantes o pastillas para dormir</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes7" id="SEDANTES_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes7" id="SEDANTES_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="sedantes7" id="SEDANTES_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">h. Alucinógenos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos7" id="ALUCINOGENOS_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos7" id="ALUCINOGENOS_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="alucinogenos7" id="ALUCINOGENOS_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">i. Opiáceos</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos7" id="OPIACEOS_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos7" id="OPIACEOS_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="opiaceos7" id="OPIACEOS_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">j. Otros (especifique)</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros7" id="OTROS_7" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros7" id="OTROS_71" value="6">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" disabled name="otros7" id="OTROS_72" value="3">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>           
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
            <!--Pregunta 8-->                 
            <div class="card">
                <div class="card-header" role="tab" id="headingEight">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            8.  ¿Alguna  vez  ha  consumido alguna droga por vía inyectada?
                        </a>
                    </h6>
                </div>
                <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row"> 
                            <div class="col-md-2"> 
                            </div>
                            <div class="col-md-8">  
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left"></th>
                                            <th scope="col" class="text-center">Nunca</th>
                                            <th scope="col" class="text-center">Sí, en los últimos3 meses</th>
                                            <th scope="col" class="text-center">Sí, pero no en los últimos 3meses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">(Marque la casilla que corresponda)</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="drogaInyectada" id="DROGA_INYECTADA" value="0" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="drogaInyectada" id="DROGA_INYECTADA1" value="1">
                                                    </label>
                                                </div>                            
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input position-static" type="radio" name="drogaInyectada" id="DROGA_INYECTADA2" value="2">
                                                    </label>
                                                </div>
                                            </td>                                            
                                        </tr>
                                      </tbody>
                                </table>
                                <br>
                                <h5>Es importante preguntar acerca de:</h5>  
                                <br>
                                <div class="row"> 
                                    <div class="col-md-4">                                        
                                        <div class="card"> 
                                            <div class="card-body">                   
                                                <p class="text-center">Cuatro días o menos por mes en promedio, durante los últimos tres meses.</p>
                                            </div>
                                        </div>                                            
                                    </div> 
                                   <div class="col-md-4">                                        
                                        <img src="arrowright.png" class="rounded mx-auto d-block">                                           
                                    </div> 
                                    <div class="col-md-4">                                        
                                        <div class="card bg-light">
                                            <div class="card-body">                   
                                                <p class="text-center"><Strong>Intervención Breve.</Strong></p>
                                            </div>
                                        </div>                                            
                                    </div> 
                                </div>    
                                <br>
                                <div class="row"> 
                                    <div class="col-md-4">                                        
                                        <div class="card"> 
                                            <div class="card-body">                   
                                                <p class="text-center">Más de cuatro días por mes en promedio, durante los últimos tres meses.</p>
                                            </div>
                                        </div>                                            
                                    </div> 
                                    <div class="col-md-4">                                        
                                        <img src="arrowright.png" class="rounded mx-auto d-block">                                           
                                    </div> 
                                    <div class="col-md-4">                                        
                                        <div class="card bg-light"> 
                                            <div class="card-body">                   
                                                <p class="text-center"><Strong>Evaluación adicional y tratamiento más intensivo.</Strong></p>
                                            </div>
                                        </div>                                            
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="row">
                <div class="col-md-12 text-center">
                    <br>
                    <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Evaluar</button>
                </div>
                </div> 
        </form>
    </div>
</div>
<footer class="container mt-5">
  <p>Desarrollado por <a target="_blank" href="https://osvaldogonzalez.name/"> Osvaldo Noe Gonzalez Del Rio</a> &copy; <?php echo date("Y"); ?></p>
</footer>
</main><!-- /.container -->
</div>
</div>
</body>
<script>
    /*-------------------------------------------------------
    //  ACTIVAR LAS PREGUNTAS CON BASE EN EL CONSUMO - VALIDACION 
    ---------------------------------------------------------*/
    function Enable(value,id)
    {
        var items = ['2','21','22','23','24','3','31','32','33','34','4','41','42','43','44','5','51','52','53','54','6','61','62','7','71','72'];
        
        if(id == 'TABACO')
        {
            var items = ['2','21','22','23','24','3','31','32','33','34','4','41','42','43','44','6','61','62','7','71','72'];
        }
        
        if(value == '1')
        {
            items.forEach(function(element)
            {
                document.getElementById(id+'_'+element).disabled = false;
            });
        }
        else
        {
            items.forEach(function(element)
            {
                document.getElementById(id+'_'+element).disabled = true;
                document.getElementById(id+'_'+element).value = 0;
            });
        }
    }
    $(document).on('click','#ENVIAR',function(){
    $("form :input").prop("disabled", false);
    });
    </script>
</html>
