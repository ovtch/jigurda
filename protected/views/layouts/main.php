<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />

    <meta name='yandex-verification' content='7ae1f53aebe51150' />
    <meta name="google-site-verification" content="LQ3Rv2_2kqWBDK5tqWPojFJKvWLL9RYC1mHrI5C3CU4" />

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
<?php

if (!empty($this->keywords))
{
  echo '<meta name="keywords" content="'. $this->keywords. '" />';
}

?>
<title><?php echo $this->pageTitle; ?></title>
</head>

<body>

<div class="container">

    <?php $this->widget('bootstrap.widgets.BootNavbar', array(
    'fixed'=>false,
    'brand'=>Yii::app()->name,
    'brandUrl'=>'http://firminform.ru',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.BootMenu',
            'items'=>array(
                array('label'=>'Главная', 'url'=>array('/site/index')),
                array('label'=>'Российские компании', 'url'=>array('/company/index')),
//                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
//                    array('label'=>'DROPDOWN HEADER', 'itemOptions'=>array('class'=>'nav-header')),
//                    array('label'=>'Action', 'url'=>'#'),
//                    array('label'=>'Another action', 'url'=>'#'),
//                    array('label'=>'Something else here', 'url'=>'#'),
//                    '---',
//                    array('label'=>'Separated link', 'url'=>'#'),
//                )),
            ),
        ),
        //'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
//        array(
//            'class'=>'bootstrap.widgets.BootMenu',
//            'htmlOptions'=>array('class'=>'pull-right'),
//            'items'=>array(
//                array('label'=>'Link', 'url'=>'#'),
//                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
//                    array('label'=>'Action', 'url'=>'#'),
//                    array('label'=>'Another action', 'url'=>'#'),
//                    array('label'=>'Something else here', 'url'=>'#'),
//                    '---',
//                    array('label'=>'Separated link', 'url'=>'#'),
//                )),
//            ),
//        ),
    ),
)); ?>



	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
        <!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter11708083 = new Ya.Metrika({id:11708083, enableAll: true, trackHash:true, webvisor:true});
        }
        catch(e) { }
    });
})(window, "yandex_metrika_callbacks");
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
<noscript><div><img src="//mc.yandex.ru/watch/11708083" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>