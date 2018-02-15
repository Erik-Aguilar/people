<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte edición por Tipificación</h3>
            </div>
            <div class="panel-body">
              <div class="zui-wrapper">
                <div class="zui-scroller">
                <table class="zui-table table table-bordered">
                <thead>

                	<tr>
                    	<th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">DN</th>
                    	<th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Vendedor</th>
                        <th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Validador</th>
                    	<th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Editor</th>
                        <th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Fecha de venta</th>
                        <th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Fecha de edición</th>
                        <th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Estatus edición</th>
                        <th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Estatus edición 2</th>
                        <th rowspan="2" style="height: 61px; padding-top:20px; background: #f4f1ed;">Motivo de rechazo</th>
                    </tr>
                    
                </thead>

                    <?php foreach($valores as $key => $values): ?>
                    <tr>
                        <td style="text-align: center;"> <?php echo e($values -> DN); ?> </td>
                        <td style="text-align: center;"> <?php echo e($values -> vendedor); ?> </td>
                        <td style="text-align: center;"> <?php echo e($values -> validador); ?> </td>
                        <td style="text-align: center;"> <?php echo e($values -> editor); ?> </td>
                        <td style="text-align: center;"> <?php echo e($values -> fecha_venta); ?> </td>
                        <td style="text-align: center;"> <?php echo e($values -> fecha_editado); ?> </td>
                        <td style="text-align: center;"> <?php echo e($values -> estatus); ?> </td>
                        <td style="text-align: center;"> <?php echo e($values -> editado); ?> </td>
                        <td style="text-align: center;"> <?php echo e($values -> motivo); ?> </td>
                    </tr>
                    <?php endforeach; ?>

                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>   -->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make( $menu , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>