@extends($menu)
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte general de operación/ Coordinador (Telefonica) / Supervisor / Agente</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example" data-page-length='100'>
                <thead>
                  <tr>
                    <th>#</th>
                    <th align=center>{{$nombre}}</th>
                    <th>Turno</th>
                    <th>Fecha Capacitacion</th>
                    <th>Ventas</th>
                    <th>VPH</th>
                    <th>Calidad</th>
                    @if($is_hora)
                    <th>Hora entrada</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  <?php $tot=0;?>
                  @foreach ($val as $key => $value)
                  <tr>
                    <td>{{$key +1 }}</td>
                      <td >{{$value['nombre']}}</td>
                      <td>{{$value['turno']}}</td>
                      <td>{{$value['fechaCapa']}}</td>
                      <td>{{$value['total']}}</td>   <!--Ventas segun el turno-->
                      <td>{{$value['VPH']}}</td>   <!--VPH segun el turno-->
                      <td>{{$value['calidad']}}%</td>   <!--VPH segun el turno-->
                      @if($is_hora)
                      <td>{{$value['hora']}}</td>
                      @endif
                  </tr>
                  <?php $tot=$tot+$value['total'];?>
                  @endforeach

                </tbody>
                <tbody>
                  <tr>
                    <th colspan="4">Total</th>
                    <td>{{$tot}}</td>
                    <td></td>
                  </tr>
                </tbody>
             </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('content2')
<!-- <script src="//code.jquery.com/jquery-1.12.3.min.js"></script> -->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<!--alertify -->

<script>

    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true,
            "order": [[ 5, 'desc' ]]
        });
    });

</script>
@stop
