<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<h2><?php echo __d('cake_dev', 'Bienvenue sur la Gestion de Location de voiture', Configure::version()); ?></h2>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<?php
if (file_exists(WWW_ROOT . 'css' . DS . 'cake.generic.css')):
?>
<p id="url-rewriting-warning" style="background-color:#e32; color:#fff;">
	<?php echo __d('cake_dev', 'URL rewriting is not properly configured on your server.'); ?>
	1) <a target="_blank" href="http://book.cakephp.org/2.0/en/installation/url-rewriting.html" style="color:#fff;">Help me configure it</a>
	2) <a target="_blank" href="http://book.cakephp.org/2.0/en/development/configuration.html#cakephp-core-configuration" style="color:#fff;">I don't / can't use URL rewriting</a>
</p>
<?php
endif;
?>
<p>
<?php
	
		echo '<h4>';
			echo $this->Html->Link('Afficher tous les Vehicules', array('controller' => 'vehicules', 'action' => 'index'));
		echo '</h4>';
	//	echo $this->I18n->flagSwitcher(array('class' => 'languages','id' => 'language-switcher'));
	//	echo '<img src="E:\UniServerZ\www\carCake\images\vehicules-image.jpg" alt="Auto" width="304px" height="228px">';
		
		echo '<h4>';
			echo $this->Html->Link('Afficher tous les Details', array('controller' => 'details', 'action' => 'index'));
		echo '</h4>';
                echo $this->Html->Image("teslaVersion2.svg", array(
                                       	"alt" => "Logo",
					'url' => array('controller' => 'logos', 'action' => 'index')
				)); 
		
	//	echo '<img src="..\..\..\..\..\..\images\details-image.png" alt="Details" width="304px" height="228px">';
	
?>
</p>