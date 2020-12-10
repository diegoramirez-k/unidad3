<div class="form-group <?php echo e($errors->has('Nombre') ? 'has-error' : ''); ?>">
    <label for="Nombre" class="control-label"><?php echo e('Nombre'); ?></label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="<?php echo e(isset($categoria->Nombre) ? $categoria->Nombre : ''); ?>" >
    <?php echo $errors->first('Nombre', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('Descripcion') ? 'has-error' : ''); ?>">
    <label for="Descripcion" class="control-label"><?php echo e('Descripcion'); ?></label>
    <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="<?php echo e(isset($categoria->Descripcion) ? $categoria->Descripcion : ''); ?>" >
    <?php echo $errors->first('Descripcion', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('Imagen') ? 'has-error' : ''); ?>">
    <label for="Imagen" class="control-label"><?php echo e('Imagen'); ?></label>
    <?php if(isset($categoria->Imagen)): ?>
    <br>
    <img src="<?php echo e(asset('storage').'/'.$categoria->Imagen); ?>" class="img-thumbnail img-fluid" alt="" width="200">

    <?php endif; ?>
    <input class="form-control" name="Imagen" type="file" id="Imagen" value="<?php echo e(isset($categoria->Imagen) ? $categoria->Imagen : ''); ?>" >
    <?php echo $errors->first('Imagen', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-success" type="submit" value="<?php echo e($formMode === 'Editar' ? 'Actualizar' : 'Crear'); ?>">
</div>
<?php /**PATH C:\laragon\www\Proyectoprueba\resources\views/categorias/form.blade.php ENDPATH**/ ?>