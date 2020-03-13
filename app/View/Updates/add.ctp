<div id="articles">
<h3>Adding Update <span id="button"><?php echo $this->Html->link('Back', array('controller' => 'updates', 'action' => 'managment')); ?></span></h3>

<?php

	echo $this->Form->create('Update');
	echo $this->Form->input('Title');
	echo $this->Form->input('Text', array('rows' => '4'));
	echo $this->Form->input('Version');
	echo $this->Form->end('Add');
	
?>

</div>