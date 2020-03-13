<div id="articles">
<h3>Updates managment <span id="button"><?php echo $this->Html->link('Add new update', array('action' => 'add')); ?></span></h3>
<table>
<tr>
<td>ID</td>
<td>Title</td>
<td>Version</td>
<td>Created</td>
<td>Actions</td>
</tr>
<?php foreach($updates as $update): ?>
	<tr>
	<td>
	<?php echo $update['Update']['ID']; ?>
	</td>
	<td>
	<?php echo $this->Html->link($update['Update']['Title'], array('controller' => 'articles', 'action' => 'view',$update['Update']['ID'])) ?>
	</td>
	<td>
	<?php echo $update['Update']['Version']; ?>
	</td>
	<td>
	<?php echo $this->Time->format($update['Update']['created'],'%d-%m-%Y','invalid'); ?>
	</td>
	<td>
	<?php
	echo ('<i class="fa fa-pencil-square-o"></i> '.$this->Html->link('Edit', array('action' => 'edit', $update['Update']['ID']))); 
	echo (' ');
	echo ('<i class="fa fa-times-circle"></i> '.$this->Form->postLink('Delete', array('action' => 'delete', $update['Update']['ID']), array('confirm' => 'Do You want to delete this update?')));
	?>
	</td>
	</tr>
	<?php endforeach; ?>
</table>
</div>