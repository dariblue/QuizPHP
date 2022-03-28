<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">QUIZZ</a>
        </div>
    </nav>



    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8" id="partida" >
                <?php
                include('misfunciones.php');
                $mysqli = conectaBBDD();

                $consulta = $mysqli->query("SELECT * FROM preguntas GROUP BY `tema` ");
                $num_filas = $consulta->num_rows;

                for ($i = 0; $i < $num_filas; $i++) {
                    $r = $consulta->fetch_array();
                    // echo $r['tema'] . '';
                    ?>
                    <button onclick="cargaTema('<?php echo $r['tema'] ?> ')" type="button" class="btn btn-info col-12"> <?php echo $r['tema'] ?> </button><br><br>
                    <?php
                }


                ?>
            </div>
            <div class="col">

            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>

    <script>
        function cargaTema(_tema){
            $('#partida').load();
        }
    </script>



</body>

</html>