
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Vehicule'), array('action' => 'add'), array('class' => '')); ?></li>
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="vehicules index">
		
			<h2><?php echo __('Vehicules'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="hidden"><?php echo $this->Paginator->sort('ID'); ?></th>
							<th><?php echo $this->Paginator->sort('KILO'); ?></th>
							<th><?php echo $this->Paginator->sort('RETOUR'); ?></th>
							<th><?php echo $this->Paginator->sort('MOTEUR'); ?></th>
							<th><?php echo $this->Paginator->sort('PASSAGER'); ?></th>
                                                        <th class="hidden"><?php echo $this->Paginator->sort('NOM'); ?></th>
							<th><?php echo $this->Paginator->sort('EMAIL'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('Marque'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('Photo'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($vehicules as $vehicule): ?>
	<tr>
		<td class="hidden"><?php echo h($vehicule['Vehicule']['ID']); ?>&nbsp;</td>
		<td><?php echo h($vehicule['Vehicule']['KILO']); ?>&nbsp;</td>
                <td><?php echo h($vehicule['Vehicule']['RETOUR']); ?>&nbsp;</td>
		<td><?php echo h($vehicule['Vehicule']['MOTEUR']); ?>&nbsp;</td>
		<td><?php echo h($vehicule['Vehicule']['PASSAGER']); ?>&nbsp;</td>
		<td class="hidden"><?php echo h($vehicule['Vehicule']['NOM']); ?>&nbsp;</td>
		<td><?php echo h($vehicule['Vehicule']['EMAIL']); ?>&nbsp;</td>
                <td><?php echo h($vehicule['Subcategory']['name']); ?></td>
		<td><?php echo $this->Html->image('filenames/' . $vehicule['Vehicule']['ID'] . '.' . $vehicule['Vehicule']['filename'], array('height' => 150, 'width' => 150)); ?></td>
                                               
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicule['Vehicule']['ID']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicule['Vehicule']['ID']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicule['Vehicule']['ID']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $vehicule['Vehicule']['ID'])); ?>
			<?php echo $this->Html->link(__('Ajouter Detail'), array('controller' => 'Details', 'action' => 'add', $vehicule['Vehicule']['ID']), array('class' => 'btn btn-default btn-xs')); ?>

                    
                    
                    
                    
               
                    
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