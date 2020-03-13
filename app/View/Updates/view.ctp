<div id="articles">
<h3><?php echo h($update['Update']['Title']) ?></h3>

<p><small>Created: <?php echo $update['Update']['created']; ?></small> <small>Version: <?php echo $update['Update']['Version']; ?></small></p>

<p><?php echo $update['Update']['Text']; ?></p>

<p><?php echo $this->Html->link('Back', array('controller' => 'updates', 'action' => 'index')) ?></p>
</div>