<div id="container" class="sending create_user forgot columns login clearfix">
	<div id="content">
    <div class="pageTitle">Desactivar cuenta</div>
    <div class="pageTitleBorder"></div>
	<p>¿Tienes la seguridad de que quieres desactivar la cuenta '<?php echo $user->username; ?>'?</p>
	
    <?php echo form_open("auth/deactivate/".$user->id);?>
    	
      <p>
      	<label for="confirm">Sí:</label>
		<input type="radio" name="confirm" value="yes" checked="checked" />
      	<label for="confirm">No:</label>
		<input type="radio" name="confirm" value="no" />
      </p>
      
      <?php echo form_hidden($csrf); ?>
      <?php echo form_hidden(array('id'=>$user->id)); ?>
      
      <p><?php echo form_submit('submit', 'Submit');?></p>

    <?php echo form_close();?>

</div>
</div>
