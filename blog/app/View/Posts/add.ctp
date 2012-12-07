<h1>Adicionando Postagens</h1>
<?php

#criando o formuladrio atraves do AJUDANTE Form
echo $this->Form->create('Post');

#gerando os inputs atraves do ajudante FORM
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));

#fechando o formulario e gerando o botão SUbmit
echo $this->Form->end("Enviar");