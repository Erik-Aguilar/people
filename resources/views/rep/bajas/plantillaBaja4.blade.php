@extends('layout.rep.basic')
@section('content')

            <div class="row">
                <div class="col-md-12 ">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Plantilla</h3>
                        </div>
                        <div class="panel-body">


                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Fecha de Baja</th>
                                        <th>Numero de bajas</th>
                                        <th>Turno</th>
                                        <th>Puesto</th>
                                        <th>Campaña</th>
                                        <th>Motivo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datos as $datosValue)
                                    <tr >
                                        <td>{{ $datosValue->fecha_baja}}</td>
                                        <td>{{ $datosValue->num}}</td>
                                        <td>{{ $datosValue->turno}}</td>
                                        <td>{{ $datosValue->puesto}}</td>
                                        <td>{{ $datosValue->campaign}}</td>
                                        <td>{{ $datosValue->motivo_baja}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@stop
@section('content2')
        <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <script>
$(document).ready(function () {
    $('#dataTables-example').DataTable({
        responsive: true,
        order:[0,'desc']
    });
});
        </script>
    @stop
