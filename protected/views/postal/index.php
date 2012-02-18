<?php
$this->breadcrumbs=array(
	'Postals',
);

$this->menu=array(
	array('label'=>'Create Postal','url'=>array('create')),
	array('label'=>'Manage Postal','url'=>array('admin')),
);
?>

<h1>Postals</h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
