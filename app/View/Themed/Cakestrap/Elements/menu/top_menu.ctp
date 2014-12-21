<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('Acceuil', array('controller' => 'vehicules', 'action' => 'index'), array('class' => 'navbar-brand')); ?>
		<?php $titre = ( 'Vehicules'); ?>
                <?php $titre2 = ( 'Details'); ?>
                <?php $titre3 = ( 'Utilisateur'); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><?php echo $this->Html->link($titre, array('controller' => 'vehicules', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link($titre2, array('controller' => 'details', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link($titre3, array('controller' => 'users', 'action' => 'index')); ?></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Langue <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li> <?php echo $this->I18n->flagSwitcher(array('class' => 'languages', 'id' => 'language-switcher'));?> </li>
				</ul>
				</a>
                              
			

				</li>  
			
		</ul>
		<ul class="nav navbar-nav pull-right">
		<li><?php echo $this->Html->link(__('Connexion'), array('controller' => 'users', 'action' => 'login'));?></li>
		<li><?php echo $this->Html->link(__('Deconnexion'), array('controller' => 'users', 'action' => 'logout'));?></li>
<li><?php echo $this->Html->image("teslaVersion2.svg", array(
                                        'height' => 90, 
                                        'width' => 150,
					"alt" => "Logo",
					'url' => array('controller' => 'logos', 'action' => 'index')
				));
				?></li>		
</ul>
		
		<!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->

