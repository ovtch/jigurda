<?php
$this->breadcrumbs=array(
	'Postals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Postal','url'=>array('index')),
	array('label'=>'Create Postal','url'=>array('create')),
	array('label'=>'Update Postal','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Postal','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Postal','url'=>array('admin')),
);
?>

<h1>View Postal #<?php echo $model->id; ?></h1>

<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'okr',
		'obl',
		'reg',
		'city1',
		'city2',
	),
)); ?>
