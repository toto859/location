
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Detail'), array('action' => 'edit', $detail['Detail']['ID']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Detail'), array('action' => 'delete', $detail['Detail']['ID']), array('class' => ''), __('Are you sure you want to delete # %s?', $detail['Detail']['ID'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Details'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Detail'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Vehicules'), array('controller' => 'vehicules', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Vehicule'), array('controller' => 'vehicules', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="details view">

			<h2><?php  echo __('Detail'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('ID'); ?></strong></td>
		<td>
			<?php echo h($detail['Detail']['ID']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('IMAGE'); ?></strong></td>
		<td>
			<?php echo h($detail['Detail']['IMAGE']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('AJOUT'); ?></strong></td>
		<td>
			<?php echo h($detail['Detail']['AJOUT']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('COMMENTAIRE'); ?></strong></td>
		<td>
			<?php echo h($detail['Detail']['COMMENTAIRE']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('AUTEUR'); ?></strong></td>
		<td>
			<?php echo h($detail['Detail']['AUTEUR']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('COM VISIBLE'); ?></strong></td>
		<td>
			<?php echo h($detail['Detail']['COM_VISIBLE']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Vehicule'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($detail['Vehicule']['ID'], array('controller' => 'vehicules', 'action' => 'view', $detail['Vehicule']['ID']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
