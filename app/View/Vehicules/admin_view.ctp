
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Vehicule'), array('action' => 'edit', $vehicule['Vehicule']['ID']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Vehicule'), array('action' => 'delete', $vehicule['Vehicule']['ID']), array('class' => ''), __('Are you sure you want to delete # %s?', $vehicule['Vehicule']['ID'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Vehicules'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Vehicule'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="vehicules view">

			<h2><?php  echo __('Vehicule'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('ID'); ?></strong></td>
		<td>
			<?php echo h($vehicule['Vehicule']['ID']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('KILO'); ?></strong></td>
		<td>
			<?php echo h($vehicule['Vehicule']['KILO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('RETOUR'); ?></strong></td>
		<td>
			<?php echo h($vehicule['Vehicule']['RETOUR']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('MOTEUR'); ?></strong></td>
		<td>
			<?php echo h($vehicule['Vehicule']['MOTEUR']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('PASSAGER'); ?></strong></td>
		<td>
			<?php echo h($vehicule['Vehicule']['PASSAGER']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('NOM'); ?></strong></td>
		<td>
			<?php echo h($vehicule['Vehicule']['NOM']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('EMAIL'); ?></strong></td>
		<td>
			<?php echo h($vehicule['Vehicule']['EMAIL']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
