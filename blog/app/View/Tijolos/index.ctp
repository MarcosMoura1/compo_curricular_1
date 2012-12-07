<div class="page-header">
<h1>Cadastros de tijolos</h1>

</div>
<P>
	<?php echo $this->Html->link("Cadastrar Novo Produto", array('controller'=>'tijolos','action'=>'add'),
	array('class'=>"btn btn-success"));?>
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
				<td><?php echo $tijolo['Tijolo']["created"];?></td>
				<td><?php echo $tijolo['Tijolo']["modified"];?></td>
				<td>
					<!--<a href="/post/view/id">Visualizar</a>-->

				<?php echo $this->Html->link("Visualizar",array('controller'=>'tijolos','action'=>'view',
				$tijolo['Tijolo']["id"]),array ('class'=>"btn"));?>
				</td>	

				<td>
				
				<?php echo $this->Html->link('Editar', array('action' => 'edit', $tijolo['Tijolo']['id']),array ('class'=>"btn btn-info"));?>
        		</td>
       	 		<td>
        		<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $tijolo['Tijolo']['id']),
        		array('class'=>"btn btn-danger",'confirm' => 'Você realmente deseja Deletar o Cadastro?')); ?>
        		
				</td>
			</tr>
		<?php endforeach; ?>

		</body>
	</table>
