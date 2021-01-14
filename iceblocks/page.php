<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Icy-Realm | <?php echo get_the_title(); ?></title>
        <meta name="description" content="Winter theme">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/icyrealmsnowflake-outline.png">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/scripts.js?v=1"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- <script src="" async defer></script> --> 
         
        <nav class="fade-in one">
            <div class="flex">
                <div class="layer">
                    <!-- Logo -->
                    <div class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/icy-logo-4.png"></a></div>
                    <!--<div>
                        <h1><?php echo get_bloginfo('name'); ?></h1>
                        <p><?php echo get_post_meta(60,'Page Subtitle',true); ?></p>					
                    </div>    -->    
                    <a href="#" class="toggleMainNav" id="toggleMainNav">Menu</a>        
                    <?php
                    wp_nav_menu( array(
                    'menu' => 'main-menu',
                    'menu_class' => 'ib-nav hidden',                            
                    ) ); 
                    ?> 
                </div>          
            </div>          
        </nav> 
         
        <div class="ib-site">                      

            <main class="width fade-in three">

                <!-- Side Menu -->
                <?php
                    // Print side menu when sub-pages exist
                    $theParent = wp_get_post_parent_id(get_the_id());

                    $findChildrenOf = ($theParent) ? $theParent : get_the_ID();                 

                    $subPages = (wp_list_pages(array(
                        'title_li' => null,
                        'child_of' => $findChildrenOf,
                        'echo' => false
                    )));   

                    // Echo side-menu header
                    if (strlen($subPages)){
                        echo '<div class="ib-side-menu"><nav>
                        <a href="#" class="toggleSideNav" id="toggleSideNav">Menu</a>
                        <ul class="ib-min-list hidden" id="ib-side-nav">';
                                // Display header
                                echo '<li><a class="header" href="'.get_permalink($theParent).'">'.get_the_title($theParent).' Section</a></li>';
                                // Display sub-pages
                                echo $subPages;
                        echo '</ul></nav></div>';
                    }
                ?>

                <!-- The page -->
                <div class="ib-page">
                    
                    <header class="fade-in two">                
                        <div class="width">
                            <h1><?php echo get_the_title(); ?></h1>
                            <?php echo '<p>'. get_post_meta(get_the_ID(),'Page Subtitle',true) .'</p>'; ?>                  					
                        </div>
                    </header> 

                    <?php 
                        $post = get_post(get_the_ID());
                        $output =  apply_filters( 'the_content', $post->post_content );
                        echo $output;
                    ?> 
                               
                </div>
                
                     
            </main>   

        </div>

        <footer class="fade-in four">                
                <div class="width">
                    <div class="layer">
                    <div class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icy-logo-4.png">
                    </div>
                    
                    <div class="info">
                        <div>
                            <div class="title">Icy-Realm v1.0</div>
                            
                            <div class="copyright">Copyright 2020 - Ice-Blocks Theme Built by <a href="http://eahmed.byethost10.com/">Emad A.</a></div>
                            
                            <div class="footer-menu">
                                <?php
                                wp_nav_menu( array(
                                'menu' => 'main-menu',
                                'menu_class' => 'ib-nav',                            
                                ) ); 
                                ?> 
                            </div>

                        </div>
                    </div>
                    </div>

                </div>      
        </footer>
        
    </body>
</html>