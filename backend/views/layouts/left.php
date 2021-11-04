<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/avatar2.jpeg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Меню CMS', 'icon' => 'list', 'url' => ['/cms/home/index']],
                    YII_ENV === 'dev' ? ['label' => 'CMS', 'icon' => 'th-list', 'url' => ['/cms/home']] : [],
                    ['label' => 'Content', 'options' => ['class' => 'header']],
                    ['label' => 'Qadamjolar', 'icon' => 'font', 'url' => ['/cms/items/index?slug=qadamjo']],
                    ['label' => 'About us', 'icon' => 'list', 'url' => ['/cms/items/index?slug=about']],
                    ['label' => 'Photo Gallery', 'icon' => 'image', 'url' => ['/cms/items/index?slug=photogallery']],
                    ['label' => 'News', 'icon' => 'list-alt', 'url' => ['/cms/items/index?slug=news']],
                    ['label' => 'Articles', 'icon' => 'font', 'url' => ['/cms/items/index?slug=articles']],
                    ['label' => 'Info', 'options' => ['class' => 'header']],
                    ['label' => 'Contacts',  'icon' => 'phone', 'url' => ['/cms/unit-categories/view?id=1']],
                    ['label' => 'Socials', 'icon' => 'telegram', 'url' => ['/cms/unit-categories/view?id=2']],
                    ['label' => 'Others', 'options' => ['class' => 'header']],
                    ['label' => 'Posted messages', 'icon' => 'pencil-square-o', 'url' => ['/contacts']],
                ],
            ]
        ) ?>
    </section>
</aside>
