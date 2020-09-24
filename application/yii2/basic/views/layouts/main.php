<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<body>
<?php
if ($_ENV["DEMO_USERNAME"] != "" && $_ENV["DEMO_PASSWORD"] != "") {
    echo  "Welcome " . $_ENV["DEMO_USERNAME"];
}
else {
    echo "The DEMO_USERNAME or DEMO_PASSWORD environment variable is not set.";
}
?>
</body>
</html>
<?php $this->endPage() ?>
