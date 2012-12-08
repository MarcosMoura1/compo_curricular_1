<h1>Cadastrando novos Produtos</h1>
<?php

#criando o formuladrio atraves do AJUDANTE Form
echo $this->Form->create('Tijolo');

#gerando os inputs atraves do ajudante FORM
echo $this->Form->input('name');
echo $this->Form->input('material', array('rows' => '3'));
echo $this->Form->input('peso');

#fechando o formulario e gerando o botão SUbmit
echo $this->Form->end("Cadastrar");