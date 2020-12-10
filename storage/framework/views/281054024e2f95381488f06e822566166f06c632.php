

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">


            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">producto <?php echo e($producto->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/productos')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="<?php echo e(url('/productos/' . $producto->id . '/edit')); ?>" title="Edit producto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="<?php echo e(url('productos' . '/' . $producto->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete producto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($producto->id); ?></td>
                                    </tr>
                                    <tr><th> Imagen </th><td> <img src="<?php echo e(asset('storage').'/'.$producto->Imagen); ?>" class="img-thumbnail img-fluid" alt="" width="300"> </td></tr>
                                    <tr><th> Nombre </th><td> <?php echo e($producto->Nombre); ?> </td></tr><tr><th> Descripcion </th><td> <?php echo e($producto->Descripcion); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyectoprueba\resources\views/productos/show.blade.php ENDPATH**/ ?>