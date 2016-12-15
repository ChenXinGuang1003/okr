<?php
use yii\helpers\Url;
use app\assets\AppAsset;
AppAsset::addCss($this, '@web/static/css/lookOkr.css');
$this->title = '详情';
?>

<div class="time-cont mb1">
    <i class="grade-time-info"></i>
    <time><?php echo $okr->okr_title; ?></time>
</div>
<?php foreach ($objects as $object): ?>
    <div class="grade-cont mb1">
        <h2 class="grade-title">
            <span>Object1:</span>
            <?= $object['title'] ?>
            <i class="icon-zan-copy icon-zan"><?= $object['zan_num'] ?> </i>
        </h2>
        <ul class="grade-ul">
            <?php foreach ($object['info'] as $info): ?>
                <li class="grade-li">
                    <div class="grade-left">
                        <i class="icon-info"> </i>
                        <span class="grade-kr">  KR1:</span>
                        <span class="grade-kr-text"><?= $info['kr_title'] ?>  </span>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="zan-person">
            <i class="icon-xin"> </i>
            <?php foreach($object['zan_list'] as $zan):?>
                <span class="person"> <?= $zan['u_name']?></span>
            <?php endforeach;?>
        </div>
    </div>
<?php endforeach; ?>
<?php if( $is_public == '0' ):?>
    <footer class="footer">
        <div class="tabs"><a href="javascript:void(0)" onclick="saveOKR('public')">立即发布</a></div>
    </footer>
<?php endif;?>


