<?php
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::addCss($this, '@web/static/css/grade.css');
$this->title = '评分';
?>

<div class="time-cont mb1">
    <i class="grade-time-info"></i>
    <time>2016年10月-12月OKR</time>
</div>

<div class="grade-cont mb1 pdb1">

    <h2 class="grade-title">
        <span>Object1:</span>
        A项目顺利落地
        <small class="pinfen">评分</small>

    </h2>
    <ul class="grade-ul">
        <li class="grade-li">
            <div class="grade-left">
                <i class="icon-info"> </i>
                <span class="grade-kr">  KR1:</span>
                <span class="grade-kr-text">11.1日前上线第一版  </span>
            </div>
            <div class="grade-rigth">

                <input type="text" class="grade-rigth-input">
            </div>
        </li>
        <li class="grade-li">
            <div class="grade-left">
                <i class="icon-info"> </i>
                <span class="grade-kr">  KR1:</span>
                <span class="grade-kr-text">11.1日前上线第一版  </span>
            </div>
            <div class="grade-rigth">

                <input type="text" class="grade-rigth-input">
            </div>
        </li>
        <li class="grade-li">
            <div class="grade-left">
                <i class="icon-info"> </i>
                <span class="grade-kr">  KR1:</span>
                <span class="grade-kr-text">11.1日前上线第一版  </span>
            </div>
            <div class="grade-rigth">

                <input type="text" class="grade-rigth-input">
            </div>
        </li>
    </ul>
</div>

<div class="grade-cont mb1 pdb1">

    <h2 class="grade-title">
        <span>Object1:</span>
        A项目顺利落地
        <small class="pinfen">评分</small>
    </h2>
    <ul class="grade-ul">
        <li class="grade-li">
            <div class="grade-left">
                <i class="icon-info"> </i>
                <span class="grade-kr">  KR1:</span>
                <span class="grade-kr-text">11.1日前上线第一版  </span>
            </div>
            <div class="grade-rigth">

                <input type="text" class="grade-rigth-input">
            </div>
        </li>
        <li class="grade-li">
            <div class="grade-left">
                <i class="icon-info"> </i>
                <span class="grade-kr">  KR1:</span>
                <span class="grade-kr-text">11.1日前上线第一版  </span>
            </div>
            <div class="grade-rigth">

                <input type="text" class="grade-rigth-input">
            </div>
        </li>
        <li class="grade-li">
            <div class="grade-left">
                <i class="icon-info"> </i>
                <span class="grade-kr">  KR1:</span>
                <span class="grade-kr-text">11.1日前上线第一版  </span>
            </div>
            <div class="grade-rigth">

                <input type="text" class="grade-rigth-input">
            </div>
        </li>
    </ul>
</div>


<div class="mark">
    <div class="mark-cont">
        <h3>优先级&权重</h3>
        <ul class="selects">
            <li>高</li>
            <li class="bg-blue">中</li>
            <li>低</li>
        </ul>
        <input type="text" class="weight" placeholder="请填写权重(例：40%，填写40)">
        <ul class="btns-cont">
            <li class="m-btn bd-r onblue">关闭</li>
            <li class="m-btn">提交</li>
        </ul>
    </div>
</div>

