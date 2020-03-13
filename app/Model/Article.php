<?php 
class Article extends AppModel {
	public $validate = array(
		'Title' => array(
			'rule' => 'notEmpty'
		),
		'Text' => array(
			'rule' => 'notEmpty'
		),
	);
}
?>