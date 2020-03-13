<?php 
class Update extends AppModel {
	public $validate = array(
		'Title' => array(
			'rule' => 'notEmpty'
		),
		'Text' => array(
			'rule' => 'notEmpty'
		),
		'Version' => array(
			'rule' => 'notEmpty'
		),
	);
}
?>