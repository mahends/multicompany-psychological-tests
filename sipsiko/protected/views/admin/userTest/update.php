<?php
$this->breadcrumbs = array(
    'Roles' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Role</strong> Update <?php echo $model->id; ?></h2>
    </div>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>