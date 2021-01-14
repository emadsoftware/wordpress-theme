<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Icy-Realm</title>
    <meta name="description" content="Winter theme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/icyrealmsnowflake-outline.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bootstrap-iso.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts.js?v=3"></script>
    
    
    
    
</head>
<body class="body-home">
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

        <div class="ib-site home">

            <header class="fade-in two">                
                <div class="width">
                    <!-- <h1>Icy Digital Solutions</h1>
                    <p>Emad A.'s online portfolio, blog, and learning resources hub</p> 
                    <p>NOTE: We're under construction! Please visit <a style="color: gray;" target="_blank" href="https://icyrealm.github.io">https://icyrealm.github.io</a> for now, thanks!</p>                 					 -->
                </div>
            </header>

            <main class="fade-in three">
                <div class="ib-page">
                    <div class="width">                                 
                        <?php 
                        $post = get_post(5);
                        $output =  apply_filters( 'the_content', $post->post_content );
                        echo $output;                        
                        ?>    	
                    </div>
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