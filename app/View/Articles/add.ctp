<div id="articles">
<h3>Adding article <span id="button"><?php echo $this->Html->link('Back', array('controller' => 'articles', 'action' => 'managment')); ?></span></h3>


<?php

	echo $this->Form->create('Article');
	echo $this->Form->input('Title');
	echo $this->Form->input('Text', array('rows' => '4'));
	echo $this->Form->end('Add');
	
?>

</div>