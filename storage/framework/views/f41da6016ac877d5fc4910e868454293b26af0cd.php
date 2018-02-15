<?php $__env->startSection('content'); ?>
</style>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Plantilla</h3>
                        </div>
                        <div class="panel-body">

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example" data-page-length='100'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Usuario externo</th>
                                        <th>Teléfono</th>
                                        <th>Celular</th>
                                        <th>Área</th>
                                        <th>Puesto</th>
                                        <th>Campaña</th>
                                        <th># Empleado</th>
                                        <th>Login</th>
                                        <th>Cambio de contraseña</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $key => $user): ?>
                                    <tr >
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($user->paterno); ?> <?php echo e($user->materno); ?> <?php echo e($user->nombre); ?></td>
                                        <td><?php echo e($user->user_ext); ?></td>
                                        <td><?php echo e($user->telefono_fijo); ?></td>
                                        <td><?php echo e($user->telefono_cel); ?></td>
                                        <td><?php echo e($user->area); ?></td>
                                        <td><?php echo e($user->puesto); ?></td>
                                        <td><?php echo e($user->campaign); ?></td>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->login); ?></td>

                                        <td class="center"><a href="<?php echo e(url('coordinador/plantilla/password/'.$user->id)); ?>">Nueva Contraseña</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content2'); ?>
        <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script>            
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.coordinador.layoutCoordinador', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>