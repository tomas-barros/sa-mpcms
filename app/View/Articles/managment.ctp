<div id="articles">
<h3>Articles managment <span id="button"><?php echo $this->Html->link('Add new article', array('action' => 'add')); ?></span></h3>
	<table>
	<tr>
	<td>ID</td>
	<td>Title</td>
	<td>Created</td>
	<td>Actions</td>
	</tr>
	<?php foreach($articles as $article): ?>
	<tr>
	<td>
	<?php echo $article['Article']['ID']; ?>
	</td>
	<td>
	<?php echo $this->Html->link($article['Article']['Title'], array('controller' => 'articles', 'action' => 'view',$article['Article']['ID'])) ?>
	</td>
	<td>
	<?php echo $this->Time->format($article['Article']['created'],'%d-%m-%Y','invalid'); ?>
	</td>
	<td>
	<?php
	echo ('<i class="fa fa-pencil-square-o"></i> '.$this->Html->link('Edit', array('action' => 'edit', $article['Article']['ID']))); 
	echo (' ');
	echo ('<i class="fa fa-times-circle"></i> '.$this->Form->postLink('Delete', array('action' => 'delete', $article['Article']['ID']), array('confirm' => 'Do You want to delete this article?')));
	?>
	</td>
	</tr>
	<?php endforeach; ?>
	</table>
	
</div>