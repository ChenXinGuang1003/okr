<?php
use yii\helpers\Url;
use app\assets\AppAsset;
AppAsset::addCss($this,'@web/static/css/index.css');
AppAsset::addScript($this,'@web/static/js/index.js');
$this -> title = 'OKR';
$this->params['breadcrumbs'][] = $this->title;
?>

<a href="<?= Url::to(['okr/list'])?>" class="g-block">
    <dl class="idx-cont">
        <dt class="idx-cont-dt"><i class="dt-img dt-img1"></i></dt>
        <dd class="idx-cont-dd">
            <h2 class="dd-title">我的OKR</h2>
            <p class="dd-p">新增点赞(<span>0</span>)</p>
            <a href="<?= Url::to(['okr/list'])?>" class="go-right icon-jiantouyou"></a>
        </dd>
    </dl>
</a>
<a href="<?= Url::to(['okr/subscribe'])?>" class="g-block">
    <dl class="idx-cont">
        <dt class="idx-cont-dt"><i class="dt-img dt-img2"></i></dt>
        <dd class="idx-cont-dd">
            <h2 class="dd-title">评阅OKR</h2>
            <p class="dd-p">暂无权限</p>
            <a href="<?= Url::to(['okr/subscribe'])?>" class="go-right icon-jiantouyou"></a>
        </dd>
    </dl>
</a>
