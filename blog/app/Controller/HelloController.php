<?php

class HelloController extends AppController {

//action
	//hello/index

	public function index(){
		$nomeCompleto = "Marcos Moura";

		//enviando o conteudo da variavel
		//para a VIEW

		$this->set('nome', $nomeCompleto);	

	}

	public function sobremim(){

	}

	public function contato(){

	}

	public function teste(){

	}
}


