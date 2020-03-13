<?php 

App::uses('AuthComponent','Controller/Component');

class User extends AppModel {
	public $validate = array(
		'username' => array(
			'required' => array (
				'rule' => array ('notEmpty'),
				'message' => 'Please input Your username'
			)
		),
		'password' => array(
			'required' => array (
				'rule' => array ('notEmpty'),
				'message' => 'Please input Your password'
			)
		)
	);
	
	public function beforeSave($options = array()){
		if(isset($this->data[$this->alias]['password'])){
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
	}
}

?>