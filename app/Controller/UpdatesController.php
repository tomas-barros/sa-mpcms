<?php
class UpdatesController extends AppController {

	public $helpers = array('Html','Form');
	
	
	public function index() {
		$this->set('updates', $this->Update->find('all'));
	}
	
	public function managment() {
		$this->set('updates', $this->Update->find('all'));
	}
	
	public function view($id=null){
		if(!$id){
			throw new NotFoundException(__('Invalid Update'));
		}
		$update = $this->Update->findById($id);
		if(!$update){
			throw new NotFoundException(__('Invalid Update'));
		}
		$this->set('update', $update);
	}
	
	public function add(){
		if($this->request->is('post')) {
			$this->Update->create();
			if($this->Update->save($this->request->data)){
				$this->Session->setFlash('Update has been added');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was a problem. Try again.');
			}
		}
	}
	
	public function edit($id=null){
		if(!$id){
			throw new NotFoundException(__('Invalid Update'));
		}
		$Update = $this->Update->findById($id);
		if(!$Update){
			throw new NotFoundException(__('Invalid Update'));
		}
		if($this->request->is('post') || $this->request->is('put')) {
			$this->Update->id = $id;
			if($this->Update->save($this->request->data)){
				$this->Session->setFlash('Update has been edited');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was a problem. Try again.');
			}			
		}
		if(!$this->request->data){
			$this->request->data = $Update;
		}
	}
	
	public function delete($id){
		if($this->request->is('get')){
		   throw new MethodNotAllowedException();
		}
		if($this->Update->delete($id)){
		   $this->Session->setFlash('Update has been deleted.');
		   $this->redirect(array('action' => 'index'));
		}
	}

}
?>