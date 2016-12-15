
<?php
use yii\helpers\Url;
use app\assets\AppAsset;
AppAsset::addCss($this,'@web/static/css/linkman.css');
AppAsset::addCss($this,'@web/static/css/style.css');
AppAsset::addScript($this,'@web/static/js/jquery-1.8.3.min.js');
AppAsset::addScript($this,'@web/static/js/jquery.charfirst.pinyin.js');
AppAsset::addScript($this,'@web/static/js/sort.js');

$this->title = '联系人';
?>

    <p class="linkman-search">
       <input type="text" placeholder="搜索" class="linkman-search-input js-icon-search">
    </p>
    <ul class="list-cont list-cont-bd">
        <li class="lists ">
            <a href="javascript:;" class="dp-b">
                <span class="list-img color1 l-icon1"></span>
                <span class="list-name">PC搜索研发部</span>
            </a>
        </li>
        <li class="lists">
            <a href="javascript:;" class="dp-b">
                <span class="list-img color2 l-icon2"></span>
                <span class="list-name">无线搜索研发部</span>
            </a>
        </li>
        <li class="lists">
            <a href="javascript:;" class="dp-b">
                <span class="list-img color3 l-icon3"></span>
                <span class="list-name">精准广告研发组</span>
            </a>
        </li>
        <li class="lists">
            <a href="javascript:;" class="dp-b">
                <span class="list-img color4 l-icon4"></span>
                <span class="list-name">群组</span>
            </a>
        </li>
        <li class="lists no-m">
            <a href="javascript:;" class="dp-b">
                <span class="list-img color5 l-icon5"></span>
                <span class="list-name">自定义组</span>
            </a>
        </li>
    </ul>
    <div id="letter" ></div>
    <div class="sort_box">
        <div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>1])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">张三</div>
            </a>
        </div>
        <div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>1])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">张三</div>
            </a>
        </div><div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>1])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">张三</div>
            </a>
        </div><div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>1])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">张三</div>
            </a>
        </div><div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>1])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">张三</div>
            </a>
        </div>
        <div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>2])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">李四</div>
            </a>
        </div>
        <div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>2])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">李四</div>
            </a>
        </div><div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>2])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">李四</div>
            </a>
        </div><div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>2])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">李四</div>
            </a>
        </div><div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>2])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">李四</div>
            </a>
        </div><div class="sort_list">
            <a href="<?= Url::to(['okr/list','u_id'=>2])?>">
                <div class="num_logo">
                    <img src="<?= Url::to('@web/static/img/img.png')?>" alt="">
                </div>
                <div class="num_name">李四</div>
            </a>
        </div>
    </div>
    <div class="initials">
        <ul>
            <li><img src="<?= Url::to('@web/static/img/icon-search.png')?>"></li>
        </ul>
    </div>
