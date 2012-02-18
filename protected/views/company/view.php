<?php
$this->breadcrumbs=array(
	'Компании'=>array('index'),
	$model->sn,
);

$this->menu=array(
	array('label'=>'Следующая компания', 'url'=>array(($model->id) + 1)),
//	array('label'=>'Create Company', 'url'=>array('create')),
//	array('label'=>'Update Company', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Company', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Company', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->sn; ?></h1>

<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		'fn',
//		'region',
//		'postal',
//		'inn',
//		'ogrn',
//		'okpo',
//		'adress',
//		'tel',
//		'fax'
//	),
//)); ?>


<?php $this->widget('bootstrap.widgets.BootDetailView', array(
    'data'=>$model,
    'attributes'=>array(
		'fn',
		'region',
		'postal',
		'inn',
		'ogrn',
		'okpo',
		'adress',
		'tel',
		'fax'
    ),
)); ?>

