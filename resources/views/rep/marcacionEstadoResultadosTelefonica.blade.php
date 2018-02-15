@extends( $menu )
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Reporte General de Marcacion Telefonica</h3>
      </div>

      <div class="panel-body" style="overflow:auto;">

        <br>
        <table class="table table-striped">

            <tr>
              <th colspan="2" style="text-align:left"> Estado </th>

              <th style="text-align:center">9</th>
              <th style="text-align:center">10</th>
              <th style="text-align:center">11</th>
              <th style="text-align:center">12</th>
              <th style="text-align:center">13</th>
              <th style="text-align:center">14</th>
              <th style="text-align:center">15</th>
              <th style="text-align:center">16</th>
              <th style="text-align:center">17</th>
              <th style="text-align:center">18</th>
              <th style="text-align:center">19</th>
              <th style="text-align:center">20</th>
              <th style="text-align:center">21</th>
            </tr>


            @foreach($array as $key => $value)
            <tr>
              <td rowspan="3" style="text-align:left"> {{ utf8_decode($key) }} </td>
              <td align="center"> % Contactación </td>
              <td> {{ $value['9']['contact'] }} </td>
              <td> {{ $value['10']['contact'] }} </td>
              <td> {{ $value['11']['contact'] }} </td>
              <td> {{ $value['12']['contact'] }} </td>
              <td> {{ $value['13']['contact'] }} </td>
              <td> {{ $value['14']['contact'] }} </td>
              <td> {{ $value['15']['contact'] }} </td>
              <td> {{ $value['16']['contact'] }} </td>
              <td> {{ $value['17']['contact'] }} </td>
              <td> {{ $value['18']['contact'] }} </td>
              <td> {{ $value['19']['contact'] }} </td>
              <td> {{ $value['20']['contact'] }} </td>
              <td> {{ $value['21']['contact'] }} </td>
            </tr>
            <tr>
              <td align="left"> % Conversión </td>
              <td> {{ $value['9']['conver'] }} </td>
              <td> {{ $value['10']['conver'] }} </td>
              <td> {{ $value['11']['conver'] }} </td>
              <td> {{ $value['12']['conver'] }} </td>
              <td> {{ $value['13']['conver'] }} </td>
              <td> {{ $value['14']['conver'] }} </td>
              <td> {{ $value['15']['conver'] }} </td>
              <td> {{ $value['16']['conver'] }} </td>
              <td> {{ $value['17']['conver'] }} </td>
              <td> {{ $value['18']['conver'] }} </td>
              <td> {{ $value['19']['conver'] }} </td>
              <td> {{ $value['20']['conver'] }} </td>
              <td> {{ $value['21']['conver'] }} </td>

            </tr>
            <tr>
              <td align="left"> % Por localidad </td>
              <td> {{ $value['9']['porce'] }} </td>
              <td> {{ $value['10']['porce'] }} </td>
              <td> {{ $value['11']['porce'] }} </td>
              <td> {{ $value['12']['porce'] }} </td>
              <td> {{ $value['13']['porce'] }} </td>
              <td> {{ $value['14']['porce'] }} </td>
              <td> {{ $value['15']['porce'] }} </td>
              <td> {{ $value['16']['porce'] }} </td>
              <td> {{ $value['17']['porce'] }} </td>
              <td> {{ $value['18']['porce'] }} </td>
              <td> {{ $value['19']['porce'] }} </td>
              <td> {{ $value['20']['porce'] }} </td>
              <td> {{ $value['21']['porce'] }} </td>

            </tr>
            @endforeach
        </table>

      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

</script>

@stop
