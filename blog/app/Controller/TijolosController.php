<?php

class TijolosController extends AppController{
	public $helpers = array ('Html','Form');
	public $components = array("Session");



	//action
	// /post/index
	public function index() {
        $todasAsPostagens = $this->Tijolo->find('all');

        
        // limite da paginação
            $this->paginate = array('limit' => 5);

        // paginate('Post') === $this->Post->find('all')
            $todasAsPostagens = $this->paginate('Tijolo');

        //jogar para a VIEW
        $this->set('tijolos', $todasAsPostagens);

        #/posts/view/3
    }
        public function view($id = null) {

        	# setar o post com id ==3
        	$this->Tijolo->id = $id;


        	#procurar
        	$p = $this->Tijolo->read();

        	#enviando para a VIEW os campos do item
        	$this->set('tijolo',$p);

        }
        # /post/add

         public function add(){
        

            #se for enviado um POST pegar os dados de fora e salvar no banco
            if($this->request->is('post')){

                $dadosDoFormulario = $this->request->data;

                #tentar salvar os dados no banco
                #se conseguir salvar, mostrar MSG e REDIRENCIONAR para o Index


                If($this->Tijolo->save($dadosDoFormulario)){
                    #mostrar MSG
                  
                    
                    $this->Session->setFlash('<div class="alert alert-success">O novo produto foi adicionado com sucesso!</div>');

                    

                    
                  

                    #redirencionar para o index
                     $this->redirect(array('action' => 'index'));


        		}

        	}

        }
function edit($id = null) {
    $this->Tijolo->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Tijolo->read();
    } else {
        if ($this->Tijolo->save($this->request->data)) {
            $this->Session->setFlash("O cadastro foi alerado com sucesso!", 'flash_success');

            $this->redirect(array('action' => 'index'));
     

        }
    }
}

        function delete($id) {
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
             if ($this->Tijolo->delete($id)) {
                
                $this->Session->setFlash('<div class="alert alert-info">O post com o códifo de nº ' . $id . ' foi deletado.</div>');
                
                $this->redirect(array('action' => 'index'));
            }
        }	

    	
}

