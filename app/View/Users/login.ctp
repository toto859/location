<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Connexion'); ?></h2>

		<div class="users form">
                    <?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->Form->create('User'); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('username'); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('password'); ?>
					</div><!-- .form-group -->

				</fieldset>

			<?php echo $this->Form->end(__('Login')); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-