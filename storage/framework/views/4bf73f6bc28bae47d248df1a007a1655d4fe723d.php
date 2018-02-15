<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PeopleConnect</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
      <!-- dynatable -->
      <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo e(URL('/assets/js/dynatable/jquery.dynatable.css')); ?>">

    </head>
    <body >
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Coordinador Banamex</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Banamex<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/banamex/reportes')); ?>">Reportes Banamex</a></li>
                                <li><a href="<?php echo e(url('/banamex/asistencia')); ?>">Asistencia Banamex</a></li>
                                <li><a href="<?php echo e(url('/banamex/validacion')); ?>">Validacion Banamex</a></li>
                                <li><a href="<?php echo e(url('/banamex/backoffice')); ?>">Back-Office Banamex</a></li>
                                <li><a href="<?php echo e(url('/banamex/productividad')); ?>">Productividad Agentes Banamex</a></li>
                                <li><a href="<?php echo e(url('/banamex/bajas')); ?>">Bajas Banamex</a></li>
                                <li><a href="<?php echo e(url('/banamex/posicionesBanamex')); ?>">Posiciones Banamex</a></li>
                                <li><a href="<?php echo e(url('banamex/reporteIncidencias')); ?>">Incidencias Banamex</a></li>
                                <li><a href="<?php echo e(url('banamex/reporteVentas')); ?>">Reporte Ventas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bancomer<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/Bancomer/reportes')); ?>">Reportes Bancomer</a></li>
                                <li><a href="<?php echo e(url('/Bancomer/asistencia')); ?>">Asistencias Bancomer</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bancomer 2<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/Bancomer_2/reportes')); ?>">Reportes Bancomer 2</a></li>
                                <li><a href="<?php echo e(url('/Bancomer_2/asistencia')); ?>">Asistencias Bancomer 2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Audios<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/banamex_Audios')); ?>">Busca Audios</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agentes<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/banamex/agentes')); ?>">Agentes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo e(url('/ListaTicket')); ?>">Lista de Ticket</a></li>
                                    <li><a href="<?php echo e(url('/NuevoTicket')); ?>">Nuevo Ticket</a></li>
                                </ul>
                            </li>
                        <li><a href="<?php echo e(url('salir')); ?>" class="btn btn-link">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        </header>
        <br>
        <br>
        <br>
        <br>
        <br>

            <?php echo $__env->yieldContent('content'); ?>


        <!-- Scripts -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <?php echo $__env->yieldContent('content2'); ?>
    </body>
</html>
