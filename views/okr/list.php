<?php
use yii\helpers\Url;
use app\assets\AppAsset;
AppAsset::addCss($this,'@web/static/css/myOkr.css');
AppAsset::addScript($this,'@web/static/js/index.js');
$this->title = '我的OKR';
?>

<a href="<?= Url::to(['okr/create'])?>" class="g-block">
    <ul class="ul-cont mb05">
        <li class="ul-li">
            <h2 class="dd-title"> <b class="text-gay">2016年</b>10月-12月OKR<span class="hint">（待填写）</span></h2>
            <p class="dd-p">10-28 17:31</p>
            <div class="g-border"></div>
            <div class="li-right-cont">
                <p class="grade-cont vh">评分：<span class="js-grade">0.5</span></p>
                <div class="heart"><i class="icon-xin"></i>1</div>
            </div>
        </li>
    </ul>
</a>
<?php foreach($objects as $object): ?>

    <?php if($object['is_public'] == 0):?>
        <a href="<?= Url::to(['okr/create','okr_id'=>$object['okr_id']])?>" class="g-block">
            <ul class="ul-cont mb05">
                <li class="ul-li">
                    <h2 class="dd-title">
                        <?= $object['okr_title'];?>

                        (待发布)

                        <span class="hint"></span>
                    </h2>
                    <p class="dd-p"><?= $object['okr_date'];?></p>
                    <div class="g-border"></div>
                    <div class="li-right-cont">
                        <p class="grade-cont vh">评分：<span class="js-grade">0.5</span></p>
                        <div class="heart"><i class="icon-xin red"></i><?= $object['zan_num'];?></div>
                    </div>
                </li>
            </ul>
        </a>
    <?php else:?>
        <a href="<?= Url::to(['okr/detail','o_id'=>$object['okr_id']])?>" class="g-block">
            <ul class="ul-cont mb05">
                <li class="ul-li">
                    <h2 class="dd-title">
                        <?= $object['okr_title'];?>
                        <span class="hint"></span>
                    </h2>
                    <p class="dd-p"><?= $object['okr_date'];?></p>
                    <div class="g-border"></div>
                    <div class="li-right-cont">
                        <p class="grade-cont vh">评分：<span class="js-grade">0.5</span></p>
                        <div class="heart"><i class="icon-xin red"></i><?= $object['zan_num'];?></div>
                    </div>
                </li>
            </ul>
        </a>
    <?php endif;?>
<?php endforeach; ?>

