<?php

class ServersController extends AppController {

	
    public function index() {
    
	$this->set('server_ip', 'IP');
	$this->set('server_port', PORT);	
	
	}
	
	
	
}

?>