<div id="articles">
<h3><?php echo h($article['Article']['Title']) ?></h3>

<p><small>Created: <?php echo $article['Article']['created']; ?></small></p>

<p><?php echo $article['Article']['Text']; ?></p>

<p><?php echo $this->Html->link('Back', array('controller' => 'articles', 'action' => 'index')) ?></p>
</div>