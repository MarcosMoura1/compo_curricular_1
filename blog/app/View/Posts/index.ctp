<div class="page-header">
<h1>Listando as Tabelas</h1>

</div>
<p>
	<?php echo $this->Html->link("<i class='icon-plus-sign icon-white'></i> Novo item", 
			array('controller' => 'posts', 'action' => 'add'), 
			array( 'escape' => false, 'class' => 'btn btn-small btn-success')); 
	?>
</p>

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

				<?php echo $this->Html->link("<i class='icon-eye-open'></i> Visualizar", 
									array("controller" => "posts", "action" => "view", 
									$post["Post"]["id"] ),
					            	array('escape' => false, 'class' => 'btn btn-small')); ?>
					
					<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', 
									array('action' => 'edit', 
									$post['Post']['id']),
					            	array('escape' => false, 'class' => 'btn btn-small btn-info')); ?>

        		<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Deletar',
					                array('action' => 'delete', $post['Post']['id']),
					                array('confirm' => 'Realmente deseja Excluir?', 
					                'escape' => false, 'class' => 'btn btn-small btn-danger')); ?>
        		
				</td>
			</tr>
		<?php endforeach; ?>

		</body>
	</table>
	<?php echo $this->element('pagination');?>
