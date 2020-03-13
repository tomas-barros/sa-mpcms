<?php
class ArticlesController extends AppController {

	public $helpers = array('Html','Form');
	
	public $paginate = array(
		'limit' => '5',
		'order' => array(
            'Article.created' => 'desc'
        )
	);
	
	public function index() {
		$this->set('articles', $this->Article->find('all'));
	}
	
	public function managment() {
		$this->set('articles', $this->Article->find('all'));
	}
	
	public function home() {
		$this->set('articles', $this->paginate('Article'));		
	}
	
	public function view($id=null){
		if(!$id){
			throw new NotFoundException(__('Invalid Article'));
		}
		$article = $this->Article->findById($id);
		if(!$article){
			throw new NotFoundException(__('Invalid Article'));
		}
		$this->set('article', $article);
	}
	
	public function add(){
		if($this->request->is('post')) {
			$this->Article->create();
			if($this->Article->save($this->request->data)){
				$this->Session->setFlash('Article has been added');
				$this->redirect(array('action' => 'managment'));
			} else {
				$this->Session->setFlash('There was a problem. Try again.');
			}
		}
	}
	
	public function edit($id=null){
		if(!$id){
			throw new NotFoundException(__('Invalid Article'));
		}
		$article = $this->Article->findById($id);
		if(!$article){
			throw new NotFoundException(__('Invalid Article'));
		}
		if($this->request->is('post') || $this->request->is('put')) {
			$this->Article->id = $id;
			if($this->Article->save($this->request->data,false)){
				$this->Session->setFlash('Article has been edited');
				$this->redirect(array('action' => 'managment'));
			} else {
				$this->Session->setFlash('There was a problem. Try again.');
			}			
		}
		if(!$this->request->data){
			$this->request->data = $article;
		}
	}
	
	public function delete($id){
		if($this->request->is('get')){
		   throw new MethodNotAllowedException();
		}
		if($this->Article->delete($id)){
		   $this->Session->setFlash('Article has been deleted.');
		   $this->redirect(array('action' => 'managment'));
		}
	}

}
?>