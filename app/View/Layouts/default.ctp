<?php

/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 * SA:MP CMS 0.1  http://sourceforge.com/projects/sampcms
 */

$cakeDescription = __d('cake_dev', 'SA:MP CMS');
$siteURL = 'http://localhost/sampcms_02_basic';

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
		
		
		echo $this->Html->css('sampcms');

		
		CakeSession::write('Config.language', 'eng');		
		
	?>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><i class="fa fa-cog"></i> <?php echo $this->Html->link($cakeDescription, $siteURL); ?></h1>
			<div id="menu">
			<a href="<?php echo($siteURL); ?>"><i class="fa fa-home"></i> Index</a>
			<a href="<?php echo($siteURL); ?>/articles/"><i class="fa fa-cog"></i> Articles</a>
			<a href="<?php echo($siteURL); ?>/updates/"><i class="fa fa-cog"></i> Updates</a>
			<a href="<?php echo($siteURL); ?>/servers/"><i class="fa fa-dashboard"></i> Server</a>
			<a href="<?php echo($siteURL); ?>/community/"><i class="fa fa-comment"></i> Community</a>
			</div>
		</div>
		<div id="user_panel">
		<?php if ($this->Session->read('Auth.User')){ 
		echo __('M_Greetings');
		print $this->Session->read('Auth.User.username');
		echo ('<a href="'.$siteURL.'/articles/managment"><i class="fa fa-archive"></i> '.__('M_Articles').'</a>');
		echo ('<a href="'.$siteURL.'/updates/managment"><i class="fa fa-cog"></i> '.__('M_Updates').'</a>');
		echo ('<a href="'.$siteURL.'/users/managment"><i class="fa fa-user"></i> '.__('M_Users').'</a>');
		echo ('<a href="'.$siteURL.'/users/logout"><i class="fa fa-sign-out"></i> '.__('M_Logout').'</a>');
		} else {
		echo ('<a href="'.$siteURL.'/users/login"><i class="fa fa-sign-in"></i> '.__('M_Login').'</a>');
		}?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>		
			
			
		</div>
		
		
		
		
		<div id="footer">
			<span style="float: left;"><a href="<?php echo $siteURL; ?>">&copy; 2014 by <?php echo $cakeDescription; ?></a></span>
			<span style="float: right;"><a href="http://sourceforge.com/projects/sampcms" target="_blank">Powered by SA:MP CMS 0.1</a></span>
		</div>
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
	
</body>
</html>
