@extends($menu)
@section('content')


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte de citas no atendidas</h3>
            </div>
            <div class="panel-body">

              {{ Form::open(['action' => 'RhController@UpCandEntre',
                              'method' => 'post',
                              'class'=>"form-horizontal",
                              'accept-charset'=>"UTF-8",
                              'enctype'=>"multipart/form-data"
                          ]) }}

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                    <th># Empleado</th>
                    <th>Nombre Completo</th>
                    <th>Estatus de Llamada</th>
                    <th>Nueva Fecha de Entrevista</th>
                    <th>Nueva Hora de Entrevista</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ Form::text('id',$detalle[0]->id, array('class' => 'form-control', 'readonly'=>'readonly')) }}</td>
                  <td>{{ Form::text('nombre_completo', $detalle[0]->nombre_completo, array('class' => 'form-control', 'readonly'=>'readonly')) }}</td>
                  <td>
                    {{ Form::select('estatusLlamada', [
                    'Cita programada' => 'Cita programada',
                    'No contesta' => 'No contesta',
                    'No le interesa' => 'No le interesa'],
                    $detalle[0]->estatus_llamada, ['required' => 'required', 'class'=>"form-control", 'placeholder'=>""]  ) }}
                  </td>
                  <td>{{ Form::date('new_fecha',date("Y-m-d", strtotime($detalle[0]->fecha)), array('class' => 'form-control')) }}</td>
                  <td>{{ Form::time('new_hora',$detalle[0]->hora, array('class' => 'form-control')) }}</td>
                </tr>

              </tbody>
            </table>

              <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-10">
                      {{ Form::submit('Enviar',['class'=>"btn btn-default"]) }}
                  </div>
              </div>

{{ Form::close() }}

            </div>
        </div>
    </div>
</div>

</div>




@stop
