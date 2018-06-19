<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Queue Test';
$this->params['breadcrumbs'][] = $this->title;

$myMsg = "";
if ( $parm > 100 ) {
	$myMsg = "Big Number";
}
else {
	$myMsg = "Small Number";
}

?>
<?= Html::encode($myMsg) ?>
