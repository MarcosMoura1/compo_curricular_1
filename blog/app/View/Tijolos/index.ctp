<div class="page-header">
<h1>Cadastros de tijolos</h1>

</div>
<P>
	<?php echo $this->Html->link("<i class='icon-plus-sign icon-white'></i> Cadastrar Novo Produto", 
			array('controller' => 'tijolos', 'action' => 'add'), 
			array( 'escape' => false, 'class' => 'btn btn-small btn-success'));?>
</P>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Material</th>
			<th>Peso</th>
			<th>Criado em</th>
			<th>Atualizado em</th>
			<th colspan='3'>Ações</th>
		</tr>
	</thead>
	<body>
		
		<?php foreach ($tijolos as $tijolo): ?>
			 <tr>
				<td><?php echo $tijolo['Tijolo']['id']; ?></td>
				<td><?php echo $this->Html->link($tijolo['Tijolo']['name'], array('action' => 'view', $tijolo['Tijolo']['id']));?></td>
				<td><?php echo $tijolo['Tijolo']["material"];?></td>
				<td><?php echo $tijolo['Tijolo']["peso"];?></td>
				<td><?php echo date( "d/m/Y H:i", strtotime($tijolo["Tijolo"]["created"])); ?></td>
				<td><?php echo date( "d/m/Y H:i", strtotime($tijolo["Tijolo"]["modified"])); ?></td>
				

				<td><?php echo $this->Html->link("<i class='icon-eye-open'></i>Visualizar", 
									array("controller" => "tijolos", "action" => "view", 
									$tijolo["Tijolo"]["id"] ),
					            	array('escape' => false, 'class' => 'btn btn-small')); ?></td>
				
				<td><?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', 
									array('action' => 'edit', 
									$tijolo['Tijolo']['id']),
					            	array('escape' => false, 'class' => 'btn btn-small btn-info')); ?></td>
        		
        		<td><?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Deletar',
					                array('action' => 'delete', $tijolo['Tijolo']['id']),
					                array('confirm' => 'Você tem certeza?', 
					                'escape' => false, 'class' => 'btn btn-small btn-danger','confirm' => 'Você realmente deseja Deletar o Cadastro?')); ?></td>
        		
				
			</tr>





		<?php endforeach; ?>


		</body>


	</table>
	
	<?php echo $this->element('pagination');?>
	

  

