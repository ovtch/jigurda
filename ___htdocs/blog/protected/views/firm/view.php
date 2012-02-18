<?php
$this->breadcrumbs=array(
	'Firms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Firm', 'url'=>array('index')),
	array('label'=>'Create Firm', 'url'=>array('create')),
	array('label'=>'Update Firm', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Firm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Firm', 'url'=>array('admin')),
);
?>

<h1>View Firm #<?php echo $model->sn; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sn',
		'fn',
		'region',
		'postal',
		'inn',
		'ogrn',
		'okpo',
		'adress',
		'tel',
		'fax',
		'okved',
		'oid',
		'hits',
		'st',
		'alias',
		'alias2',
		'alias3',
	),
)); ?>
