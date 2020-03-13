<div id="articles">
	
	<?php foreach($updates as $update): ?>
	<div class="article">	
	<div id="heading">
	<?php echo $this->Html->link($update['Update']['Title'], array('controller' => 'updates', 'action' => 'view',$update['Update']['ID'])) ?>
	<span id="created" style="float: right;"><?php echo $this->Time->format($update['Update']['created'],'%d-%m-%Y','invalid'); ?></span>	
	<span style="float: right; margin-right: 5px;">Added</span>
	<span id="created" style="float: right; margin-right: 5px;"><?php echo $update['Update']['Version']; ?></span>
	<span style="float: right; margin-right: 5px;">Version</span>
	</div>
	<div id="content">
	<?php 
	echo $this->Text->truncate($update['Update']['Text'],500, array('ellipsis' => '...','exact' => false)); 
	echo (' ');
	echo $this->Html->link('Read more', array('controller' => 'updates', 'action' => 'view',$update['Update']['ID'])); 
	?>
	</div>
	</div>
	<?php endforeach; ?>
	
</div>