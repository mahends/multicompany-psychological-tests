<div class="wide form">

  <?php
  $form = $this->beginWidget('CActiveForm', array(
      'action' => Yii::app()->createUrl($this->route),
      'method' => 'get',
  ));
  ?>

  <div class="row">
    <?php echo $form->label($model, 'id'); ?>
    <?php echo $form->textField($model, 'id'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'slug'); ?>
    <?php echo $form->textField($model, 'slug', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'name'); ?>
    <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'description'); ?>
    <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'status'); ?>
    <?php echo $form->textField($model, 'status', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'user_id'); ?>
    <?php echo $form->textField($model, 'user_id'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'created_at'); ?>
    <?php echo $form->textField($model, 'created_at'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'updated_at'); ?>
    <?php echo $form->textField($model, 'updated_at'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
  </div>

  <?php $this->endWidget(); ?>

</div><!-- search-form -->