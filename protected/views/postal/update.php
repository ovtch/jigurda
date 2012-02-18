<?php
$this->breadcrumbs=array(
	'Postals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Postal','url'=>array('index')),
	array('label'=>'Create Postal','url'=>array('create')),
	array('label'=>'View Postal','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Postal','url'=>array('admin')),
);
?>

<h1>Update Postal <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>