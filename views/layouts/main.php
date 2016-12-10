<?php
use yii\helpers\Url;
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no, email=no" />
    <meta name="full-screen" content="true" />
    <meta name="screen-orientation" content="portrait" />
    <meta name="x5-fullscreen" content="true" />
    <meta name="360-fullscreen" content="true" />
    <title>OKR</title>
    <script src="/assets/js/fontbase.js"></script>
    <link href="/assets/css/common.css" rel="stylesheet" />
</head>

<body>
<?php echo $content ?>
<footer class="footer">
    <div class="tabs"><a href="<?= Url::to(['index/index'])?>"><i class="f-icons icon-xiaoxi"></i><span>OKR</span></a></div>
    <div class="tabs"><a href="<?= Url::to(['contact/index'])?>"><i class="f-icons icon-zl_lianxiren"></i><span>联系人</span></a></div>
    <div class="tabs"><a href="<?= Url::to(['user/index'])?>"><i class="f-icons icon-wo"></i><span>我</span></a></div>
</footer>


<script>

</script>
<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>

<script src="/assets/js/index.js"></script>

</body>

</html>
