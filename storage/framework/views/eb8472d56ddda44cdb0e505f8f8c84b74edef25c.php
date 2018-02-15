<?php $__env->startSection('content'); ?>
<?php
$value = Session::all();
?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">ventas | <?php echo e($value['nombre']); ?></h3>
            </div>
            <div class="panel-body">

               <?php echo e(Form::open(['action' => 'FaceBookVentasController@UpdateDatosValida',
                              'method' => 'post',
                              'class'=>"form-horizontal",
                              'accept-charset'=>"UTF-8",
                              'enctype'=>"multipart/form-data"
                          ])); ?>


              <div class="form-group">
                  <?php echo e(Form::label('ID','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('id',$datos[0]->id,array('class'=>"form-control", 'placeholder'=>"",'readonly'=>'readonly'))); ?>

                  </div>
              </div>


              <div class="form-group">
                  <?php echo e(Form::label('DN *','',array('class'=>"col-sm-2 control-label"))); ?>


                  <div class="col-sm-9">
                      <?php echo e(Form::text('dn',$datos[0]->dn,array('required' => 'required','class'=>"form-control", 'placeholder'=>"",'onChange'=>'validacion(this.value)','id'=>'telefono','maxlength'=>'10'))); ?>

                  </div>
                  <a id='telefonoset' class="btn btn-success glyphicon glyphicon-earphone" style="float: left;" onclick="call()"></a>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('Paterno','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('paterno',$datos[0]->paterno,array('class'=>"form-control", 'placeholder'=>"",'id'=>'paterno'))); ?>

                  </div>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('Materno','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('materno',$datos[0]->materno,array('class'=>"form-control", 'placeholder'=>"",'id'=>'materno'))); ?>

                  </div>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('Nombre','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('nombres',$datos[0]->nombre,array('class'=>"form-control", 'placeholder'=>"",'id'=>'nombre'))); ?>

                  </div>
              </div>

              <div class="form-group">
                  <?php echo e(Form::label('Horario de llamada *','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::time('h_llamada',$datos[0]->llamada,array('required' => 'required','class'=>"form-control", 'placeholder'=>"",'id'=>'nombre operador'))); ?>

                  </div>
              </div>

              <div class="form-group">
                  <?php echo e(Form::label('NIP','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('nip',null,array('class'=>"form-control", 'placeholder'=>"",'onChange'=>'validacion(this.value)','id'=>'telefono','maxlength'=>'4'))); ?>

                  </div>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('CURP','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('curp',null,array('class'=>"form-control", 'placeholder'=>"",'onChange'=>'validacion(this.value)','id'=>'telefono','maxlength'=>'19'))); ?>

                  </div>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('Estatus venta *','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::select('estatus_venta', [
                      'Buzón'=>'Buzón',
                      'Gestionado por otro call-center' => 'Gestionado por otro call-center',
                      'Movistar' => 'Movistar',
                      'Numero incorrecto' => 'Numero incorrecto',
                      'Reagendar' => 'Reagendar',
                      'Plan' => 'Plan',
                      'Ok' => 'Ok',
                      'No ok' => 'No ok'],
                  null, ['required' => 'required', 'class'=>"form-control", 'placeholder'=>""]  )); ?>

                  </div>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('Referencia 1','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('ref_1',null,array('class'=>"form-control", 'placeholder'=>"",'id'=>'paterno'))); ?>

                  </div>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('Referencia 2','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('ref_2',null,array('class'=>"form-control", 'placeholder'=>"",'id'=>'materno'))); ?>

                  </div>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('Comentarios','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::text('comentarios',null,array('class'=>"form-control", 'placeholder'=>"",'id'=>'nombre'))); ?>

                  </div>
              </div>
              <div class="form-group">
                  <?php echo e(Form::label('Fecha','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                      <?php echo e(Form::date('fecha',date('Y-m-d'),array('class'=>"form-control", 'placeholder'=>"",'id'=>'nombre'))); ?>

                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                      <?php echo e(Form::submit('Enviar',['class'=>"btn btn-default"])); ?>

                  </div>
              </div>
              <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content2'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
/*
  var telefono;
  var filtro;
  telefono=$('#telefono').val();
  filtro=telefono.substr(0,2);
  if(filtro=='55')
    $('#telefonoset').attr("href", "tel:044"+telefono);
  else
    $('#telefonoset').attr("href", "tel:045"+telefono);*/

function call(){

  var dn = $('#telefono').val();
  var direccion= "http://192.168.10.10:1234/facebook/call/" + dn + "";
  $.ajax({
    url: direccion,
    success: function(result){
        // $("#test").html(result);
    }}
  );
}

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make($menu, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>