<h1>Alterar Cadastro</h1>
<?php
    echo $this->Form->create('Tijolo', array('action' => 'edit'));
    echo $this->Form->input('name');
	echo $this->Form->input('material', array('rows' => '3'));
	echo $this->Form->input('peso');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Salvar Alteração');