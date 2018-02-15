@extends('layout.demos.reporte')
@section('content')
<style media="screen">


.zui-scroller {
  margin-left: 36.2%;
  overflow-x: scroll;
  overflow-y: visible;
  padding-bottom: 5px;
}

.zui-table .zui-sticky-col-1 {
position: absolute;
left: 3%;
width: 4%;
}
.zui-table .zui-sticky-col-2 {
position: absolute;
left:7%;
width: 31.2%;
}
.a{
  width: 150px;
}
th,td{
  text-align: center;
}
</style>


<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte de calidad por analista de calidad</h3>
            </div>
            <div class="panel-body">
              <div class="zui-wrapper">
                <div class="zui-scroller">
                <table class="zui-table table-condensed table-bordered">
                  <tr>
                    <th rowspan="2" class="zui-sticky-col-1" style="height: 61px; padding-top:20px; background: #f4f1ed;">#</th>
                    <th rowspan="2" class="zui-sticky-col-2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Analista Calidad</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>
                    <th  style="background: #f4f1ed;">01/02/2016</th>

                  </tr>
                  <tr>
                    <td ></td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                    <td class="a" style="background: #f4f1ed;">Calificación</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col-1" style="background:#fff;">1</td>
                    <td class="zui-sticky-col-2" style="background:#fff;">Trujano Gonzalez Jhonatan Omar</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                    <td class="a" style="background:#fff;">12%</td>
                  </tr>

                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>



@stop
