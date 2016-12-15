<?php
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::addCss($this, '@web/static/css/myInfo.css');
$this->title = '我的信息';
?>

<ul class="list-cont list-cont-bd g-mb2">
    <li class="lists">
        <a href="grade.html" class="dp-b">
            <span class="list-img1">头像</span>
            <img class="list-photo" src="<?=Url::to('@web/static/img/photo.jpg')?>"/>
            <a href="#" class="go-right icon-jiantouyou"></a>
        </a>

    </li>
    <li class="lists no-m">
        <a href="grade.html" class="dp-b">
            <span class="list-img2">签名</span>
            <span class="list-info">未填写</span>
            <a href="#" class="go-right icon-jiantouyou"></a>
        </a>

    </li>
</ul>

<ul class="list-cont list-cont-bd g-mb2">
    <li class="lists">
        <a href="grade.html" class="dp-b">
            <span class="list-img2">部门</span>
            <span class="list-info">营销事业部-技术部</span>
        </a>

    </li>
    <li class="lists">
        <a href="grade.html" class="dp-b">
            <span class="list-img2">工号</span>
            <span class="list-info">209504</span>
        </a>

    </li>
    <li class="lists no-m">
        <a href="grade.html" class="dp-b">
            <span class="list-img2">座位号</span>
            <span class="list-info">搜狐网络大厦12层东侧51排02号</span>
            <a href="#" class="go-right icon-jiantouyou"></a>
        </a>

    </li>
</ul>
<ul class="list-cont list-cont-bd g-mb2">
    <li class="lists">
        <a href="grade.html" class="dp-b">
            <span class="list-img2">分机</span>
            <span class="list-info">010-56899999-5398</span>
        </a>

    </li>
    <li class="lists">
        <a href="grade.html" class="dp-b">
            <span class="list-img2">手机</span>
            <span class="list-info">17310477587</span>
        </a>

    </li>
    <li class="lists">
        <a href="grade.html" class="dp-b">
            <span class="list-img2">邮箱</span>
            <span class="list-info">yueqi@sogou-inc.com</span>
            <a href="#" class="go-right icon-jiantouyou"></a>
        </a>

    </li>
    <li class="lists no-m">
        <a href="javascript:;" class="dp-b">
            <span class="list-img2">公开手机号</span>
             <span class="go-right1">
              <div class="trun">
                  <input type="checkbox" id="onoff">
                  <label for="onoff">设置静音</label>
              </div>
              </span>
        </a>

    </li>
</ul

