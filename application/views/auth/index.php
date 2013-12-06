<div id="container">
	<div id="content">

		<h3>Re:mediantes</h3>
		<p>Debajo, una lista de las y los re:mediantes.</p>

		<div id="infoMessage"><?php echo $message;?></div>

		<table cellpadding=0 cellspacing=10>
			<tr>
				<th>Re:mediante</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Grupos</th>
				<th>Estatus</th>
			</tr>
			<?php foreach ($users as $user):?>
				<tr>
					<td><?php echo $user->username;?></td>
					<td><?php echo $user->name;?></td>
					<td><?php echo $user->email;?></td>
					<td>
						<?php foreach ($user->groups as $group):?>
							<?php echo $group->name;?><br />
		                <?php endforeach?>
					</td>
					<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active') : anchor("auth/activate/". $user->id, 'Inactive');?></td>
				</tr>
			<?php endforeach;?>
		</table>

		<p><a href="<?php echo site_url('auth/create_user');?>">Crear una nueva cuenta de re:mediante</a></p>

	</div>
</div>
