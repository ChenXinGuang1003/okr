<?php
use yii\helpers\Url;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;

AppAsset::addCss($this, '@web/static/css/writeOkr.css');
AppAsset::addScript($this, '@web/static/js/writeOkr.js');
$this->title = '创建';
?>

<div id="scrolls">
    <div class="content">
        <div class="time-cont mb05">
            <span class="time-info">时间</span>
            <time>2016年10月-12月</time>
        </div>
        <?php $form = ActiveForm::begin([
            'id' => 'okrCreateForm',
            'action' => yii\helpers\Url::to(['okr/create']),
        ]) ?>
        <input type="hidden" id="action" name="action">
        <input type="hidden" name="okrTitle" id="okrTitle">
        <input type="hidden" name="postData" id="postData">
        <input type="hidden" value="<?php echo Yii::$app->getRequest()->getCsrfToken(); ?>" name="YII_CSRF_TOKEN"/>
        <?php ActiveForm::end(); ?>
        <div class="object-cont">
            <div class="append">
                <?php if(count($objects) >0):?>
                    <?php foreach ($objects as $object): ?>
                        <div class="js-cont mb05 Object">
                            <div class="object-cont-sub">
                                <div class="object-input-cont">
                                    <label for="" class="object-label">请输入</label>
                                    <input class="obj-input" name="Object['title]" placeholder="Object"
                                           value="<?= $object['object_title'] ?>"/>
                                </div>
                            </div>
                            <ul class="table-cont">

                                <?php foreach($object['info'] as $kr):?>
                                <li class="list-li">
                                    <div class="left-cont">
                                        <img src="<?= Url::to('@web/static/img/list-icon.png') ?>" alt="" class="list-img">
                                        <span class="list-info">
                                            KR1:
                                        </span>
                                    </div>
                                    <div class="right-cont g-bdtm">
                                        <input class="obj-input" placeholder="填写详情" value="<?= $kr['kr_title']?>"/>
                                        <span class="btn-clos icon-iconfonterror"></span>
                                    </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                            <div class="add-pos">
                                <div class="add-text add-kr">
                                    <img src="<?= Url::to("@web/static/img/icon-jia.png") ?>" alt="" class="icon-jia pdr13">添加KR
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php else:?>
                    <div class="js-cont mb05 Object">
                        <div class="object-cont-sub">
                            <div class="object-input-cont">
                                <label for="" class="object-label">请输入</label>
                                <input class="obj-input" name="Object['title]" placeholder="Object"/>
                            </div>
                        </div>
                        <ul class="table-cont">
                            <li class="list-li">
                                <div class="left-cont">
                                    <img src="<?= Url::to('@web/static/img/list-icon.png') ?>" alt="" class="list-img">
                                <span class="list-info">
                                    KR1:
                                </span>
                                </div>
                                <div class="right-cont g-bdtm">
                                    <input class="obj-input" placeholder="填写详情"/>
                                    <span class="btn-clos icon-iconfonterror"></span>
                                </div>
                            </li>
                            <li class="list-li">
                                <div class="left-cont">
                                    <img src="<?= Url::to('@web/static/img/list-icon.png') ?>" alt="" class="list-img">
                                    <span class="list-info">
                                        KR1:
                                    </span>
                                </div>
                                <div class="right-cont g-bdtm">
                                    <input class="obj-input" placeholder="填写详情"/>
                                    <span class="btn-clos icon-iconfonterror"></span>
                                </div>
                            </li>
                            <li class="list-li">
                                <div class="left-cont">
                                    <img src="<?= Url::to('@web/static/img/list-icon.png') ?>" alt="" class="list-img">
                                    <span class="list-info">
                                        KR1:
                                    </span>
                                </div>
                                <div class="right-cont g-bdtm">
                                    <input class="obj-input" placeholder="填写详情"/>
                                    <span class="btn-clos icon-iconfonterror"></span>
                                </div>
                            </li>
                        </ul>
                        <div class="add-pos">
                            <div class="add-text add-kr">
                                <img src="<?= Url::to("@web/static/img/icon-jia.png") ?>" alt="" class="icon-jia pdr13">添加KR
                            </div>
                        </div>

                    </div>
                <?php endif;?>
            </div>

            <div class="add-obj">
                <img src="<?= Url::to("@web/static/img/icon-jia.png") ?>" alt="" class="icon-jia">添加Object
            </div>
        </div>
    </div>
</div>
<div class="none">
    <div class="object-cont">
        <div class="appendnone Object">
            <div class="js-cont mb05">
                <div class="object-cont-sub">
                    <div class="object-input-cont">
                        <label for="" class="object-label">请输入</label>
                        <input class="obj-input" placeholder="Object"/>
                    </div>
                </div>
                <ul class="table-cont">
                    <li class="list-li">
                        <div class="left-cont">
                            <img src="<?= Url::to('@web/static/img/list-icon.png') ?>" alt="" class="list-img">
                  <span class="list-info">
                    KR1:
                  </span>
                        </div>
                        <div class="right-cont g-bdtm">
                            <input class="obj-input" placeholder="填写详情"/>
                            <span class="btn-clos icon-iconfonterror"></span>
                        </div>
                    </li>
                    <li class="list-li">
                        <div class="left-cont">
                            <img src="<?= Url::to('@web/static/img/list-icon.png') ?>" alt="" class="list-img">
                  <span class="list-info">
                    KR2:
                  </span>
                        </div>
                        <div class="right-cont g-bdtm">
                            <input class="obj-input" placeholder="填写详情"/>
                            <span class="btn-clos icon-iconfonterror"></span>
                        </div>
                    </li>
                    <li class="list-li">
                        <div class="left-cont">
                            <img src="<?= Url::to('@web/static/img/list-icon.png') ?>" alt="" class="list-img">
                  <span class="list-info">
                    KR3:
                  </span>
                        </div>
                        <div class="right-cont g-bdtm">
                            <input class="obj-input" placeholder="填写详情"/>
                            <span class="btn-clos icon-iconfonterror"></span>
                        </div>
                    </li>
                </ul>
                <div class="add-pos">
                    <div class="add-text add-kr">
                        <img src="<?= Url::to("@web/static/img/icon-jia.png") ?>" alt="" class="icon-jia pdr13">添加KR
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="tabs tabs-after"><a href="javascript:void(0)" onclick="saveOKR('save')">保存草稿</a></div>
    <div class="tabs"><a href="javascript:void(0)" onclick="saveOKR('public')">立即发布</a></div>
</footer>



