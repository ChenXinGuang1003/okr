<?php
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::addCss($this, '@web/static/css/appraiseList.css');
$this->title = '订阅列表';
?>

<h2>以下为评阅列表</h2>
<ul class="list-cont">
    <li class="lists">
        <a href="<?= Url::to(['okr/grade', 'id' => '1']) ?>" class="dp-b">
            <span class="list-img color1">树生</span>
            <span class="list-name">徐树生</span>
        </a>
    </li>
    <li class="lists">
        <a href="<?= Url::to(['okr/grade', 'id' => '2']) ?>" class="dp-b">
            <span class="list-img color2">胲麟</span>
            <span class="list-name">张胲麟</span>
        </a>
    </li>
    <li class="lists">
        <a href="<?= Url::to(['okr/grade', 'id' => '3']) ?>" class="dp-b">
            <span class="list-img color3">帅</span>
            <span class="list-name">李帅</span>
        </a>
    </li>

</ul>
