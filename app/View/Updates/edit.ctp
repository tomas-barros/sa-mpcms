<div id="articles">
<h3>Editing update <span id="button"><?php echo $this->Html->link('Back', array('controller' => 'articles', 'action' => 'managment')); ?></span></h3>

<?php

	echo $this->Form->create('Update');
	echo $this->Form->input('Title');
	echo $this->Form->input('Text', array('rows' => '4'));
	echo $this->Form->input('Version');
	echo $this->Form->input('ID', array('type' => 'hidden'));
	echo $this->Form->end('Edit');
	
?>

</div>