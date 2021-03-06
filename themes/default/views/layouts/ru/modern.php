<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head>
    <meta charset="<?php echo Yii::app()->charset; ?>">
    <title><?php echo Yii::app()->name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/web/css/main.css"/>
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>

<?php $this->widget('application.modules.menu.widgets.MenuWidget', array('name' => 'top-menu')); ?>

<div class="container">

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="row">
    <div class="hero-unit">
        <h1>Юпи!</h1>

        <p>Простая, легкая и удобная CMS</p>
        <p>Работаем на Yiiframework, Twitter Bootstrap и jQuery!</p>

        <p>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'label' => 'Скачать Юпи!',
                'type' => 'primary',
                'size' => 'large',
                'url' => 'https://github.com/yupe/yupe/releases'
            ));
            ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'htmlOptions' => array(
                    'class' => 'btn btn-success'
                ),
                'label' => 'Документация',
                'type' => 'primary',
                'size' => 'large',
                'url' => 'http://yupe.ru/docs/'
            ));
            ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'htmlOptions' => array(
                    'class' => 'btn btn-info'
                ),
                'label' => 'Скриншоты',
                'type' => 'primary',
                'size' => 'large',
                'url' => 'http://yupe.ru/gallery/gallery/list'
            ));
            ?>


        </p>
        <br/>

        <p>
            <iframe src="http://ghbtns.com/github-btn.html?user=yupe&repo=yupe&type=watch&count=true&size=large"
                    allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
            <iframe src="http://ghbtns.com/github-btn.html?user=yupe&repo=yupe&type=fork&count=true&size=large"
                    allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
            <iframe src="http://ghbtns.com/github-btn.html?user=yupe&repo=yupe&type=follow&count=true&size=large"
                    allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>

            <a href="https://twitter.com/share" class="twitter-share-button" data-via="YupeCms" data-lang="ru" data-size="large" data-hashtags="yupe">Твитнуть</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            <iframe frameborder="0" allowtransparency="true" scrolling="no"
                    src="https://money.yandex.ru/embed/small.xml?uid=41001846363811&amp;button-text=05&amp;button-size=m&amp;button-color=orange&amp;targets=%D0%9D%D0%B0+%D1%80%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D0%B5+%D0%AE%D0%BF%D0%B8!&amp;default-sum=100&amp;mail=on"
                    width="auto" height="42"></iframe>


        </p>

        <p><a href="https://scrutinizer-ci.com/g/yupe/yupe/"><img src="https://scrutinizer-ci.com/g/yupe/yupe/badges/quality-score.png?s=7530a908ed160af10407a051474a9064325510cc" alt="Scrutinizer Quality Score" style="max-width:100%;"></a>
            <a href="https://packagist.org/packages/yupe/yupe"><img src="https://poser.pugx.org/yupe/yupe/downloads.png" alt="Total Downloads" style="max-width:100%;"></a>
            <a href="http://depending.in/yupe/yupe"><img src="https://d2xishtp1ojlk0.cloudfront.net/d/1477472" alt="Dependencies Status" style="max-width:100%;"></a>
            </p>
    </div>
</div>

<!-- Example row of columns -->
<div class="row">
    <div class="span4 module-info">
        <h3><i class="icon icon-user"></i> Пользователи</h3>

        <p class="muted">
            Регистрация, авторизация, восстановление пароля через эл.почту, профили пользователей.
        </p>

        <p>
            Модуль предоставляет удобный интерфейс для управления пользователями и их данными.
        </p>
    </div>

    <div class="span4 module-info">
        <h3><i class="icon icon-file-text"></i> Страницы</h3>

        <p class="muted">
            Просто и быстро создавайте страницы "О нас", "Контакты" и прочие "статические" странички.
        </p>

        <p>
            Настройки модуля позволяют выбрать удобный для вас WYSIWYG редактор или добавить свой.
        </p>
    </div>

    <div class="span4 module-info">
        <h3><i class="icon icon-bullhorn"></i> Новости</h3>

        <p class="muted">
            Публикуйте новости, делитесь интересной информацией.
        </p>

        <p>
            Структурируйте новости по категориям, пишите тексты на разных языках.
        </p>
    </div>
</div>

<div class="row">
    <div class="span4 module-info">
        <h3><i class="icon icon-pencil"></i> Блоги</h3>

        <p class="muted">Создавайте индивидуальные и коллективные блоги.</p>

        <p>Модуль позволяет каждому зарегистрированному пользователю вести свой собственный блог, что в свою очередь
            способствует повышению интерактивности вашего ресурса.</p>
    </div>
    <div class="span4 module-info">
        <h3><i class="icon icon-comment"></i> Комментариии</h3>

        <p class="muted">
            Можно комментировать любую сущность с выстраиванием древовидных комментариев.
        </p>

        <p>
            С помощью этого модуля пользователи смогут активно участвовать в обсуждении контента вашего сайта:
            комментировать статьи и новости, обсуждать фото- и видео-материалы.
        </p>
    </div>
    <div class="span4 module-info">
        <h3><i class="icon icon-shopping-cart"></i> Каталог</h3>

        <p class="muted">Модуль позволит быстро и легко создать простой каталог товаров.</p>

        <p>Для более удобной навигации по каталогу возможно разбивать его на категории и подкатегории, использовать
            сортировку и постраничную разбивку. </p>
    </div>
</div>

<div class="row">
    <div class="span6">

        <h2><small>Наш твиттер</small></h2>
        <div class="widget twitter-widget">
            <a class="twitter-timeline" href="https://twitter.com/YupeCms" data-widget-id="342373817932451841" height="400">
                Твиты пользователя @YupeCms
            </a>
        </div>
    </div>
    <div class="span6">
        <?php $this->widget('application.modules.blog.widgets.LastPostsWidget', array('limit' => 3,'view' => 'lastposts-index'));?>
        <h2><small>Разработано сообществом</small></h2>
        <span id="contributors"></span> <h2><small>Последнее в блогах</small></h2>
    </div>
</div>

<?php $this->widget('application.modules.gallery.widgets.GalleryWidget', array('limit' => 4, 'galleryId' => 4, 'view' => 'gallery-index'));?>

<hr>
    <?php $this->renderPartial('//layouts/_footer');?>
</div>

</div> <!-- /container -->

<script type="text/javascript">
    !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + "://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            type: 'GET',
            url: 'https://api.github.com/repos/yupe/yupe/contributors',
            dataType: 'jsonp',
            success: function(data,status) {
                $.each(data.data, function (key, contributor) {
                    var image = "<img src=\"" + contributor.avatar_url + "\" width=\"48\" height=\"48\">";
                    var link = $(document.createElement('a'));
                    link.attr('href','https://github.com/'+contributor.login);
                    link.attr('target', "_blank");
                    link.attr('rel', 'tooltip');
                    link.attr('title', contributor.login);
                    link.html(image);
                    $('#contributors').append(link);
                });
            }
        });
    })
</script>
<div style="display: none;">
    <?php //@TODO убрать данный костыль, без него стили бутсрапа не подтягиваются;?>
    <?php $this->widget('bootstrap.widgets.TbBox'); ?>
</div>
</body>
</html>