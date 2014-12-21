<div id="page-content" class="col-sm-9">
				<?php echo $this->Html->Image("teslaVersion2.svg", array(
                                        'height' => 400, 
                                        'width' => 1000,
                                       	"alt" => "Logo",
					'url' => array('controller' => 'logos', 'action' => 'index')
				)); ?>
				<h1>Information </h1>
                                <h2>Site de Location de Voiture</h2>
				</br>
				Nom : Antoine Boucher-Crete
				</br></br>
				Cours: 420-267 MO 
				</br>
                                Titre du Cours: Developper un site Web et une application pour Internet.
				</br>
				Automne 2014, College Montmorency.
				</br></br>
                                L'application pourrait s'appliquer a de petite entreprise de location de voiture avec peu de ressource informatique a leur disposition ainsi qu'un petit budget. 
				
				<h3>Etapes d'utilisation </h3>
				<ol>
				  <li>Se connecter en tant qu'administraeur (Seul les administraeur ont droit d'utiliser se site sinon tout les gens pourront louer des voitures comme bon leur semble)</li>
				  <li>Entrer les informations propres a la voiture que vous desirez louer</li>
				  <li>Ensuite vous pouvez selon vos choix, remplit un formulaire de satifaction a votre retour de la location (sur le lien details) par les employees de la compagnie de location</li>
                                </ol>

                                <h3>Informations pour se connecter </h3>
				<ol>
				  <li>Username = admin</li>
				  <li>Password = 123</li>
				  </ol>
 <h3>Logo </h3>
				<ol>
				  <li>Le T de l'image devait sortir de l'ecran</li>
				  <li>Ou bien l'image en entier devait grandir mais bon..</li>
				  </ol>

				</br>
				Le diagramme de la base de donnee pour cree l'application :
				<?php echo $this->Html->Image("conceptual_vehicle_rental.gif"); ?>
				</br>Lien vers le diagramme : </br>
				<a href=http://www.databaseanswers.org/data_models/vehicle_rental/index.htm>DataBaseAnswers</a>
				</div>