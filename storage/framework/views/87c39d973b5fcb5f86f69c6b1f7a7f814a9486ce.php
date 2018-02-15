<?php $__env->startSection('content'); ?>



<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte marcacion por estado Telefonica</h3>
            </div>
            <div class="panel-body">

              <?php echo e(Form::open(['action' => 'ReportesController@marcacionTelefonica',
                              'method' => 'post',
                              'class'=>"form-horizontal",
                              'accept-charset'=>"UTF-8",
                              'enctype'=>"multipart/form-data",
                              'novalidate'
                          ])); ?>


                <div class="form-group">
                    <?php echo e(Form::label('Reporte','',array('class'=>"col-sm-2 control-label"))); ?>

                    <div class="col-sm-10">
                        <?php echo e(Form::select('tipoReporte', [
                        're'=>'Reporte por estado',
                        'rct'=>'Reporte de contactacion por dia',
                        'rcv'=>'Reporte de conversion por dia',
                        'desc'=>'Descargar'],
                    '', ['required' => 'required','class'=>"form-control", 'placeholder'=>"","onchange"=>"Muestra()",'id'=>'tipoReporte']  )); ?>

                    </div>
                </div>
                <div class="form-group">
                    <?php echo e(Form::label('Fecha Inicio','',array('class'=>"col-sm-2 control-label"))); ?>

                    <div class="col-sm-10">
                        <?php echo e(Form::date('fecha_i','',array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"********"))); ?>

                    </div>
                </div>

                <div class="form-group" style='display: none;' id='tipoReport'>
                    <?php echo e(Form::label('Fecha final','',array('class'=>"col-sm-2 control-label"))); ?>

                    <div class="col-sm-10">
                        <?php echo e(Form::date('fecha_f','',['required' => 'required', 'class'=>"form-control", 'placeholder'=>"********", 'id'=>"reporte"])); ?>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <?php echo e(Form::submit('Enviar',['class'=>"btn btn-default", 'id'=>"envia"])); ?>

                    </div>
                </div>
<?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  function Muestra(){
    console.log($('#tipoReporte').val());
    if($('#tipoReporte').val()=='rct' ){
      $('#tipoReport').show();
      $("#reporte").prop('disabled',false);
      $("#envia").prop('disabled', false);
    }else if ($('#tipoReporte').val()== 'rcv') {
      $('#tipoReport').show();
      $("#reporte").prop('disabled',false);
      $("#envia").prop('disabled', false);
    }else{
      $('#tipoReport').hide();
      $("#reporte").prop('disabled', true);
      $("#envia").prop('disabled', false);

    }
  }
</script

<?php $__env->stopSection(); ?>

<?php echo $__env->make( $menu , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>