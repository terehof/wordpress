<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <!-- header -->
    <header>
        <div class="header_top">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<? bloginfo('template_url'); ?>/img/logo.png" alt=""/>
                    </a>
                </div>
                <button class="app_for_calc_btn">Заявка <br/>
                    на Рассчет стоимости</button>
                <div class="callback_wrap">
                    <a href="tel:+74957970130" class="phone_link">+7 (495) 797 01 30</a>
                    <button class="callback_btn">Заказать обратный звонок</button>
                </div>
            </div>
        </div>
        <div class="calc_form">
            <div class="container">
                <? echo do_shortcode('[contact-form-7 id="58" title="Заявка на расчет стоимости"]');  ?>
            </div>
        </div>
        <div class="clear"></div>
        <div class="menu not_main">
            <div class="container">
                <nav>
                    <a id="touch-menu" class="mobile-menu" href="#"><i class="icon"></i>МЕНЮ</a>
                    <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
                </nav>
            </div>
        </div>
    </header>
    <!-- END header -->
    <!--  callback popup  -->
    <div class="popup_bg"></div>
    <div class="popup_callback">
        <div class="popup_title">
            Заказать обратный звонок
            <span class="close_popup"><img src="<? bloginfo('template_url'); ?>/img/cross.png" alt=""/></span>
        </div>
        <div class="popup_main">
            <? echo do_shortcode('[contact-form-7 id="74" title="Заказ обратного звонка"]');  ?>
        </div>
    </div>
    <!--  END callback popup  -->