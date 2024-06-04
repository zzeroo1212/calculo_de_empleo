<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloss.css">

    <title>calculo de empleados</title>
</head>

<body>

    <div class="contenedor_pantalla">


        <h1  class="h1" > calculo de salario neto </h1>
        <!--     entrada de datos  NOMBRE,TARIFA,HORA,BUTON,RESET             -->


        <form class="form" action="index.php" method="post">


            <li class="li">

                <P> nombre</P>
                <input class="input"  type="text" name="xnombre" placeholder="ingrese su nombre">


            </li>



            <li class="li">

                <P>horas</P>
                <input class="input"   type="text" name="xhoras" placeholder="ingrese las horas de trabajo">


            </li>



            <li class="li">

                <P>tarifa</P>
                <input class="input"  type="text" name="xtarifa" placeholder="ingrese su tarifa x hora">


            </li>

            <li class="contenedor_botones">
                <input class="submit" type="submit" value="enviar">
                <input class="reset" type="reset" value="reinciar">


            </li>



            <!-- codigo PHP calculo y impresion por pantalla -->






            <?php

            // variables
            error_reporting(0);
            $nombre = $_POST['xnombre'];
            $horas = $_POST['xhoras'];
            $tarifa = $_POST['xtarifa'];

               

            

            // salario bruto
            $salario_bruto = $horas * $tarifa;

            // descuento seguro de salud

            $des_seg_salud = $salario_bruto * 0.12;

            //  descuento de impuestos AFP

            $des_afp_salario  = $salario_bruto * 0.10;

            //   salario neto

            $salarioneto = $salario_bruto - $des_afp_salario - $des_seg_salud;


            ?>
        </form>

        <!-- print por pantalla -->
        <div class="resultado">


            <div class="print">
                <p class="print_p">empleado </p><?php  echo "name $nombre"; ?>
            </div>
            <div class="print">
                <p class="print_p">tarifa </p><?php echo "$salario_bruto"; ?>
            </div>
            <div class="print">
                <p class="print_p">des.salud </p><?php echo "$des_seg_salud"; ?>
            </div>
            <div class="print">
                <p class="print_p">des. AFP </p><?php echo "$des_afp_salario"; ?>
            </div>
            <div class="print">
                <p class="print_p">salario neto </p><?php echo "$salarioneto"; ?>
            </div>


        </div>





    </div>





</body>

</html>