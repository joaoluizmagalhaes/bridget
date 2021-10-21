<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bridget
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/_assets/img/favicon.png">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="Bridget">
    <meta name="keywords" content="">
    <meta name="author" content="João Magalhães">
    <?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="header__wrapper">
                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/logo-bridget.svg" alt="bridget" class="header__logo">
                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/menu-icon.svg" alt="menu" class="header__menu-icon">
                    <nav class="header__menu closed">
                        <?php 
                            $args = array(
                                'menu'       => 'Header',
                                'menu_class' => 'header__menu-list',
                                'container'  => 'ul',
                            );
                            $menu_wp = wp_nav_menu($args); 
                        ?>

                        <?php 
                            $argsBold = array(
                                'menu'       => 'Header Serviços',
                                'menu_class' => 'header__menu-list bold',
                                'container'  => 'ul',
                            );
                            $menu_wp = wp_nav_menu($argsBold); 
                        ?>
                        <?php 
                            if(!is_user_logged_in()) { ?>
                                <button class="btn btn__primary btn__login"><img src="<?php bloginfo('template_url'); ?>/_assets/img/login-icon.svg" alt="login" class="btn__icon svg">Entrar</button>
                           <?php } else { 
                                $user_meta = get_user_meta(get_current_user_id() );  
                            ?>
                               <button class="btn__login btn__link">Olá, <?= esc_html($user_meta['first_name'][0]); ?></button>
                           <?php }
                        ?>
                    </nav>
                    <nav class="header__login-menu closed logged">
                        <?php 
                            if(!is_user_logged_in()) {
                                $argsBold = array(
                                    'menu'       => 'Header - Login',
                                    'menu_class' => 'header__login-menu-list',
                                    'container'  => 'ul',
                                );
                                $menu_wp = wp_nav_menu($argsBold); ?>
                            <?php } else { ?>
                                <?= get_template_part('/templates/components/account-menu') ?>
                            <?php }
                        ?>
                    </nav>
                    
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-content">
