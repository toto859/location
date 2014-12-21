
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Detail'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Vehicules'), array('controller' => 'vehicules', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Vehicules'), array('controller' => 'vehicules', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="details index">
		
			<h2><?php echo __('Details'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('ID'); ?></th>
							<th><?php echo $this->Paginator->sort('IMAGE'); ?></th>
							<th><?php echo $this->Paginator->sort('AJOUT'); ?></th>
							<th><?php echo $this->Paginator->sort('COMMENTAIRE'); ?></th>
							<th><?php echo $this->Paginator->sort('AUTEUR'); ?></th>
							<th><?php echo $this->Paginator->sort('COM_VISIBLE'); ?></th>
							<th><?php echo $this->Paginator->sort('vehicules_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($details as $detail): ?>
	<tr>
		<td><?php echo h($detail['Detail']['ID']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['IMAGE']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['AJOUT']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['COMMENTAIRE']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['AUTEUR']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['COM_VISIBLE']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detail['Vehicules'][''], array('controller' => 'vehicules', 'action' => 'view', $detail['Vehicules']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detail['Detail']['ID']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detail['Detail']['ID']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detail['Detail']['ID']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $detail['Detail']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->