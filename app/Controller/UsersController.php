<?php
class UsersController extends AppController {

	public function login(){
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Login failed. Try again.'));
			}
		}
	}
	
	public function managment(){
		$this->set('users', $this->User->find('all'));
	}
	
	public function logout(){
		$this->redirect($this->Auth->logout());
	}
	
	public function add(){
		if($this->request->is('post')){
			$this->User->create();
			if($this->User->Save($this->request->data)){
				$this->Session->setFlash(__('User has been added'));
				$this->redirect(array('controller' => 'articles', 'action' => 'managment'));
			} else {
				$this->Session->setFlash(__('There was a problem while adding user. Try again.'));			
			}
		}
	}
	
	public function edit($id=null){
		if(!$id){
			throw new NotFoundException(__('Invalid User'));
		}
		$User = $this->User->findById($id);
		if(!$User){
			throw new NotFoundException(__('Invalid User'));
		}		
		if($this->Session->read('Auth.User.id') != 1) {
			$this->Session->setFlash('You can not edit this account');
			$this->redirect(array('action' => 'managment'));
		}
		if($this->request->is('post') || $this->request->is('put')) {
			$this->User->id = $id;
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('User has been edited');
				$this->redirect(array('action' => 'managment'));
			} else {
				$this->Session->setFlash('There was a problem. Try again.');
			}			
		}
		if(!$this->request->data){
			$this->request->data = $User;
		}
	}
	
	public function delete($id){
		if($this->request->is('get')){
		   throw new MethodNotAllowedException();
		}
		if($id == 1) {
			$this->Session->setFlash('You can not delete this account');
			$this->redirect(array('action' => 'managment'));
		}
		if($this->User->delete($id)){
		   $this->Session->setFlash('User has been deleted.');
		   $this->redirect(array('action' => 'managment'));
		}
	}
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add');
	}

}
?>