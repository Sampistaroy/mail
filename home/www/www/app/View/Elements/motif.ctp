
<div class="alert alert-<?php echo isset($type)?$type:'success';//test si le type est défnit (dans le controller)sinon affiche succes?> alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <?php echo $message; ?>
</div>
    