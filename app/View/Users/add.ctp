<div id="articles">
<h3>Adding user <span id="button"><?php echo $this->Html->link('Back', array('controller' => 'users', 'action' => 'managment')); ?></span></h3>

<?php 
		echo $this->Form->create('User');
		echo $this->Form->input('username'); 
		echo $this->Form->input('password'); 
		echo $this->Form->end('Add'); 		
?>
</div>