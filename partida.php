<?php

$tema = $_POST['tema'];
include('misfunciones.php');
$mysqli = conectaBBDD();
echo '<div class="alert alert-success" role="alert">El tema que has elejido es ' . $tema . ' </div>';

    $consulta = $mysqli -> query("SELECT * FROM `preguntas` WHERE `tema`='$tema' ORDER BY RAND() LIMIT 1");
    // $num_filas = $consulta->num_rows;
    $r = $consulta->fetch_array();
    // $pregunta_elegida = rand(0, $num_filas);

    // for ($i = 0; $i < $pregunta_elegida; $i++) {

    // }

    echo $r['enunciado'];
?>
<div class="container">
    <div class="row">
        <div class="col">
            <button class="btn btn-warning disabled col-12">
                <?php echo $r['enunciado']; ?>
            </button>
            <br><br>
            <button class="btn btn-info col-12" onclick="chequeaRespuesta('1');">
                <?php echo $r['r1']; ?>
            </button>
            <br><br>
            <button class="btn btn-info col-12" onclick="chequeaRespuesta('2'); ">
                <?php echo $r['r2']; ?>
            </button><br><br>
            <button class="btn btn-info col-12" onclick="chequeaRespuesta('3'); ">
                <?php echo $r['r3']; ?>
            </button><br><br>
            <button class="btn btn-info col-12" onclick="chequeaRespuesta('4'); ">
                <?php echo $r['r4']; ?>
            </button>
            <br><br>
        </div>
    </div>
</div>

<div id="cargaRespuesta"></div>



<script>
    function chequeaRespuesta(_respuesta){
        alert(_respuesta);
        $('#cargaRespuesta').load('partida.php', {tema: _tema})
    }

</script>