<div id="articles">

	
	<?php foreach($articles as $article): ?>
	<div class="article">	
	<div id="heading">
	<?php echo $this->Html->link($article['Article']['Title'], array('controller' => 'articles', 'action' => 'view',$article['Article']['ID'])) ?>
	<span id="created" style="float: right;"><?php echo($this->Time->format($article['Article']['created'],'%d-%m-%Y','invalid').''); ?></span>	
	<span style="float: right; margin-right: 5px;">Added</span>
	</div>
	<div id="content">
	<?php 
	echo $this->Text->truncate($article['Article']['Text'],500, array('ellipsis' => '...','exact' => false)); 
	echo (' ');
	echo $this->Html->link('Read more', array('controller' => 'articles', 'action' => 'view',$article['Article']['ID']));
	?>
	</div>
	</div>
	<?php endforeach; ?>
	
</div>