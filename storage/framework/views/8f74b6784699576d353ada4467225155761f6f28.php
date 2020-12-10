<div class="form-group <?php echo e($errors->has('Imagen') ? 'has-error' : ''); ?>">
    <label for="Imagen" class="control-label"><?php echo e('Imagen'); ?></label>
    <?php if(isset($producto->Imagen)): ?>
    <br>
    <img src="<?php echo e(asset('storage').'/'.$producto->Imagen); ?>" class="img-thumbnail img-fluid" alt="" width="200">

    <?php endif; ?>
    <input class="form-control" name="Imagen" type="file" id="Imagen" value="<?php echo e(isset($producto->Imagen) ? $producto->Imagen : ''); ?>" >
    <?php echo $errors->first('Imagen', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('Nombre') ? 'has-error' : ''); ?>">
    <label for="Nombre" class="control-label"><?php echo e('Nombre'); ?></label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="<?php echo e(isset($producto->Nombre) ? $producto->Nombre : ''); ?>" >
    <?php echo $errors->first('Nombre', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('Descripcion') ? 'has-error' : ''); ?>">
    <label for="Descripcion" class="control-label"><?php echo e('Descripcion'); ?></label>
    <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="<?php echo e(isset($producto->Descripcion) ? $producto->Descripcion : ''); ?>" >
    <?php echo $errors->first('Descripcion', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('Precio') ? 'has-error' : ''); ?>">
    <label for="Precio" class="control-label"><?php echo e('Precio'); ?></label>
    <input class="form-control" name="Precio" type="number" id="Precio" value="<?php echo e(isset($producto->Precio) ? $producto->Precio : ''); ?>" >
    <?php echo $errors->first('Precio', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-success" type="submit" value="<?php echo e($formMode === 'Editar' ? 'Actualizar' : 'Crear'); ?>">
</div>
<?php /**PATH C:\laragon\www\Proyectoprueba\resources\views/productos/form.blade.php ENDPATH**/ ?>