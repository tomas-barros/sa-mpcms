<div id="articles">
<h3>Editing User <span id="button"><?php echo $this->Html->link('Back', array('controller' => 'users', 'action' => 'managment')); ?></span></h3>

<?php

	echo $this->Form->create('User');
	echo $this->Form->input('username');
	echo $this->Form->input('password', array('type' => 'password', 'value' => ''));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Edit'); 
	
?>


</div>