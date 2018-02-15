@extends('layout.capacitador.adminRoot')
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">{{$user['nombre_completo']}} | {{$fecha}}</h3>
      </div>
      <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <th style="width:200px; text-align:center;">Nombre</th>
          <th style="width:50px; text-align:center;">Puesto</th>
          <th style="width:50px; text-align:center;">Turno</th>
          <th style="width:120px; text-align:center;">Campaña/Area</th>
          <th style="width:120px; text-align:center;">Telefono fijo</th>
          <th style="width:120px; text-align:center;">Telefono Celular</th>
          <th style="width:50px; text-align:center;">Capacitador</th>
          <th style="width:70px; text-align:center;">Dia 1</th>
          <th style="width:70px; text-align:center;">Dia 2</th>
          <th style="width:50px; text-align:center;">Observaciones</th>
          
        </thead>
        <tbody>

        @foreach($candidatos as $valueCandidato)
        <tr>
          <td class="center" style="width:50px; text-align:center;">{{$valueCandidato->nombre_completo}}</td>
          <td style="width:200px; text-align:center;">{{$valueCandidato->puesto}}</td>
          <td style="width:50px; text-align:center;">{{$valueCandidato->turno}}</td>
          <td style="width:120px; text-align:center;">{{$valueCandidato->campaign}} | {{$valueCandidato->area}}</td>
          <td style="width:120px; text-align:center;">{{$valueCandidato->telefono_fijo}}</td>
          <td style="width:120px; text-align:center;">{{$valueCandidato->telefono_cel}}</td>
          <td style="width:50px; text-align:center;">{{$valueCandidato->recluta}}</td>
          @foreach($observaciones as $valueObserva)
            @if($valueObserva->id==$valueCandidato->id)
              <td style="width:70px; text-align:center;">{{$valueObserva->primerDia}}</td>
              <td style="width:70px; text-align:center;">{{$valueObserva->segundoDia}}</td>
              <td style="width:50px; text-align:center;">{{$valueObserva->observaciones}}</td>
            @endif
          @endforeach
          
        </tr>
        @endforeach
          
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

</script>

@stop
