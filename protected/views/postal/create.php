<?php
$this->breadcrumbs=array(
	'Postals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Postal','url'=>array('index')),
	array('label'=>'Manage Postal','url'=>array('admin')),
);
?>

<h1>Create Postal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>