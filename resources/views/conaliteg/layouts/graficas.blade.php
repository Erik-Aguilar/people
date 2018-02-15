<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Conaliteg</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" > -->
    </head>

    <body>
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
                        <a class="navbar-brand" >Conaliteg</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/calidad/prepago') }}">Nuevo rango de fechas</a></li>
                                    <li><a href="{{ url('/calidad/prepago/novalidado') }}">No Validado</a></li>
                                    <li><a href="{{ url('/rechazos') }}">Rechazos</a></li>
                                    <li><a href="{{ url('/calidad/jefeCalidad/perMonitoreoAC') }}">Reporte de calidad</a></li>

                                    <li><a href="{{ url('/calidad/inbursa/Validacion') }}">Validacion</a></li>
                                    <li><a href="{{ url('/admin/asistencia') }}">Reporte asistencia</a></li>
                                    <li><a href="/">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/">One more separated link</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a href="{{ url('/auri/agente') }}" class="btn btn-link" title="Llamar" >
                                    <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li><a href="{{ url('/auri/agenda') }}" class="btn btn-link" title="Agenda" >
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                </a>
                            </li> -->
                            <!-- <form class="navbar-form navbar-left" role="search">
                              <div class="form-group">
                                <select class="form-control" name="descanso" id="descanso" required="">
                                  <option value=""></option>
                                  <option value="Baño">Baño</option>
                                  <option value="Break">Break</option>
                                  <option value="Capacitación">Capacitación</option>
                                  <option value="Retro">Retro</option>
                                </select>
                              </div>
                              <button type="submit" class="btn btn-default">Descanso</button>
                            </form> -->
                            <li><a href="{{ url('/conaliteg/table') }}" class="btn btn-link" title="Reportes" >
                                    Reportes CSV
                                </a>
                            </li>
                            <li><a href="{{ url('salir/conaliteg') }}" class="btn btn-link" title="Cerrar sesión" >
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>
        <br><br>
        <br>
        <br>
            @yield('content')
        <!-- Scripts -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="https://momentjs.com/downloads/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.45/css/bootstrap-datetimepicker.min.css"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.45/js/bootstrap-datetimepicker.min.js"></script>
        @yield('content2')

    </body>
</html>
