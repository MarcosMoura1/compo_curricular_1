<div class="page-header">
<h1>Listando as Tabelas</h1>

</div>
<P>
	<?php echo $this->Html->link("Novo Item", array('controller'=>'posts','action'=>'add'),
	array('class'=>"btn btn-success"));?>
</P>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Código</th>
			<th>Título</th>
			<th>Texto</th>
			<th>Criado em</th>
			<th>Atualizado em</th>
			<th colspan='3'>Ações</th>
		</tr>
	</thead>
	<body>
		<?php foreach ($posts as $post): ?>
			 <tr>
				<td><?php echo $post['Post']['id']; ?></td>
				<td><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></td>
				<td><?php echo $post["Post"]["body"];?></td>
				<td><?php echo $post["Post"]["created"];?></td>
				<td><?php echo $post["Post"]["modified"];?></td>
				<td>
					<!--<a href="/post/view/id">Visualizar</a>-->

				<?php echo $this->Html->link("Visualizar",array('controller'=>'posts','action'=>'view',
				$post["Post"]["id"]),array ('class'=>"btn"));?>
				</td>	

				<td>
				
				<?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']),array ('class'=>"btn btn-info"));?>
        		</td>
       	 		<td>
        		<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']),
        		array('class'=>"btn btn-danger",'confirm' => 'Realmente deseja Excluir?')); ?>
        		
				</td>
			</tr>
		<?php endforeach; ?>

		</body>
	</table>
