<?php
// This template for display the header
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="<?php body_class() ?>">

    <header class="<?php echo get_theme_mod('m_menu_position'); ?>" id="menu_header">
        <div class="container">
            <div class="row justify-content-bettwen">
                <div class="col-md-3">
                    <a href="<?php echo home_url(); ?>" class="navbar-brand">
                        <img src="<?php echo get_theme_mod('m_logo'); ?>" alt="logo">
                    </a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                </div>
            </div>
        </div>
    </header>