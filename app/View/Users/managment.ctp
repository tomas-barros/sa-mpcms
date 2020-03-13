<div id="articles">
<h3>Users managment <span id="button"><?php echo $this->Html->link('Add new user', array('action' => 'add')); ?></span></h3>
	<table>
	<tr>
	<td>ID</td>
	<td>Login</td>
	<td>Actions</td>
	</tr>
	<?php foreach($users as $user): ?>
	<tr>
	<td>
	<?php echo $user['User']['id']; ?>
	</td>
	<td>
	<?php echo $user['User']['username']; ?>
	</td>
	<td>
	<?php
	if ($user['User']['id'] == 1 && $this->Session->read('Auth.User.id') != 1) {
	
	echo('Disabled');
	} else {
	echo ('<i class="fa fa-pencil-square-o"></i> '.$this->Html->link('Edit', array('action' => 'edit', $user['User']['id']))); 
	echo (' ');
	echo ('<i class="fa fa-times-circle"></i> '.$this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Do You want to delete this user account?'))); 
	
	}
	?>
	</td>
	</tr>
	<?php endforeach; ?>
	</table>
	
</div>