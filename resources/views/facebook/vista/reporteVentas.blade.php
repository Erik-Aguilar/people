@extends($menu)
@section('content')
<?php
$value = Session::all();
?>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ventas</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example" data-page-length='100'>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Nombre operador</th>
                                        <th style="text-align: center;">Total</th>
                                        <th style="text-align: center;">Ventas Facebook</th>
                                        <th style="text-align: center;">% Facebook </th>
                                        <th style="text-align: center;">% Real</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datos as $datosValues)
                                    <tr >
                                        <td style="text-align: center;">{{ $datosValues->nombre_completo }}</td>
                                        <td class="center" style="text-align: center;">{{ $datosValues->total }}</td>
                                        <td class="center" style="text-align: center;">{{ $datosValues->Ok }}</td>
                                        <td class="center" style="text-align: center;">{{ $datosValues->por }}</td>
                                        <td class="center" style="text-align: center;">{{ $datosValues->porReal }}</td>
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
        responsive: true
    });
});
        </script>
    @stop
