
<div id="page-container" class="row">

    <div id="sidebar" class="col-sm-3">

        <div class="actions">

            <ul class="list-group">
                <li class="list-group-item"><?php echo $this->Html->link(__('List Vehicules'), array('action' => 'index')); ?></li>
            </ul><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .col-sm-3 -->

    <div id="page-content" class="col-sm-9">

        <h2><?php echo __('Add Vehicule'); ?></h2>

        <div class="vehicules form">

            <?php echo $this->Form->create('Vehicule', array('enctype' => 'multipart/form-data'));
            ; ?>

            <fieldset>

                <div class="form-group">
<?php echo $this->Form->input('KILO', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->

                <div class="form-group">
<?php echo $this->Form->input('category_id', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->

                <div class="form-group">
<?php echo $this->Form->input('subcategory_id', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->

                <div class="form-group">
<?php echo $this->Form->input('RETOUR', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
<?php echo $this->Form->input('MOTEUR', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
<?php echo $this->Form->input('PASSAGER', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
<?php echo $this->Form->input('NOM', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
<?php echo $this->Form->input('EMAIL', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
<?php echo $this->Form->input('filename', array('type' => 'file')); ?>
                </div><!-- .form-group -->

                <?php
                //let's load jquery libs from google
                $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline' => false));
                $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('inline' => false));

                //load file for this view to work on 'autocomplete' field
                $this->Html->script('View/Vehicules/index', array('inline' => false));

                //form with autocomplete class field
                echo $this->Form->input('Marque Auto Complete', array('class' => 'ui-autocomplete',
                    'id' => 'autocomplete'));
                ?>


                <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

            </fieldset>

            <?php echo $this->Form->end(); ?>

        </div><!-- /.form -->

    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<?php
$this->Js->get('#VehiculeCategoryId')->event('click', $this->Js->request(array(
            'controller' => 'subcategories',
            'action' => 'getByCategory'
                ), array(
            'update' => '#VehiculeSubcategoryId',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);
?>