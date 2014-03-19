<?php
$this->breadcrumbs = array(
    'Tests' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Test', 'url' => array('index')),
    array('label' => 'Create Test', 'url' => array('create')),
    array('label' => 'Update Test', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Test', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Test', 'url' => array('admin')),
);
?>

<h1>View Test #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'slug',
        'name',
        'description',
        'duration',
        'start_date',
        'end_date',
        'is_public',
        'status',
        'user_id',
        'type_id',
        'parent_id',
        'created_at',
        'updated_at',
    ),
));
?>
