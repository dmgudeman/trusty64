<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Awesome Theme</title>
        <?php wp_head(); ?>
    </head>

    <?php
        if( is_front_page() ):
            $awesome_classes = array( 'awesome-class', 'my-class' );
        else:
            $awesome_classes = array( 'no-awesome-class' );
        endif;
    ?>

    <body <?php body_class( $awesome_classes ); ?>>
        <div class="container">
        <div class="row">
            <div class="col-xs-12">

            <!-- The nav tag opens the nav class which wraps the navigation menu -->
            <nav class="navbar navbar-inverse">

            <div class="container-fluid">


               <div class="navbar-header">
                  <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>-->
                  <a class="navbar-brand" href="#">Pomona House</a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                       wp_nav_menu(array(
                          'theme_location' => 'primary',
                          'container' => false,
                          'menu_class' => 'nav nav-bar'
                           )
                       );
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
                <!--<div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>


                     default code from bootstrap website
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>

                    </ul>

                -->



               <!-- </div> -->
              </div>
            </nav>

           <!--</div>-->
            <!-- </div>-->

       <!--<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
           width="<?php echo get_custom_header()->width; ?>" alt="" />-->
