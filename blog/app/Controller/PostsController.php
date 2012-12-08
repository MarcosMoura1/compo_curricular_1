<?php

class PostsController extends AppController{
	public $helpers = array ('Html','Form');
	public $components = array("Session");



	//action
	// /post/index
	public function index() {
        $todasAsPostagens = $this->Post->find('all');

        // limite da paginação
            $this->paginate = array('limit' => 5);

        // paginate('Post') === $this->Post->find('all')
            $todasAsPostagens = $this->paginate('Post');


        //jogar para a VIEW
        $this->set('posts', $todasAsPostagens);

        #/posts/view/3
    }
        public function view($id = null) {

        	# setar o post com id ==3
        	$this->Post->id = $id;


        	#procurar
        	$p = $this->Post->read();

        	#enviando para a VIEW os campos do item
        	$this->set('post',$p);

        }
        # /post/add

        public function add(){
        

        	#se for enviado um POST pegar os dados de fora e salvar no banco
        	if($this->request->is('post')){

        		$dadosDoFormulario = $this->request->data;

        		#tentar salvar os dados no banco
        		#se conseguir salvar, mostrar MSG e REDIRENCIONAR para o Index


        		If($this->Post->save($dadosDoFormulario)){
        			#mostrar MSG
                  
        			
                    $this->Session->setFlash('<div class="alert alert-success">A postagem foi inserida com sucesso!</div>');


                    

                    
                  

        			#redirencionar para o index
        			 $this->redirect(array('action' => 'index'));


        		}

        	}

        }
        function edit($id = null) {
            $this->Post->id = $id;
            if ($this->request->is('get')) {
                $this->request->data = $this->Post->read();
            } else {
                if ($this->Post->save($this->request->data)) {
                    $this->Session->setFlash('<div class="alert alert-success">Seu post foi atualizado.</div>');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        function delete($id) {
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
             if ($this->Post->delete($id)) {
                
                $this->Session->setFlash('O post com o códifo de nº ' . $id . ' foi deletado.');
                
                $this->redirect(array('action' => 'index'));
            }
        }	

    	
}

 
  
    