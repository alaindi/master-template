<div class="banner-menu-wrapper">    
    <?php if( is_front_page() || is_page(9) ){ ?>
    <section id="banner" class="banner">
        <div class="container">
            <div data-aos="zoom-in" 
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine"
                 class="content-wrapper">
                  <?php $order_pageID = 15; 
                  $orderfields = get_post_meta( $order_pageID, 'orderfields', true ); ?>
                  <h1><?php echo get_bloginfo( 'description' ); ?></h1>
                  <h2>Written by: <?php echo get_bloginfo( 'name' ); ?></h2>
                  <a href="<?php echo $orderfields[0]['buy-the-book-link']; ?>" target="_blank" class="btn-style">Buy the Book</a>
                  <a href="#book-review" style="
                        display: inline-block;
                        width: 100%;
                        font-size: 50px;
                        color: #000;
                    "><i class="fas fa-angle-double-down" aria-hidden="true"></i></a>
              </div>    
        </div>        
    </section> 
    <?php } ?>
    <header>
        <div class="for-menu">
            <div class="container-fluid">
                <div class="menu-area">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-6 logo-area">
                            <div class="logo-cont">
                                <a href="<?= esc_url(home_url('/')); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-6 menu-area">
                            <nav class="navbar navbar-expand-md navbar-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                @if (has_nav_menu('primary_navigation'))
                                    {!! 
                                        wp_nav_menu([
                                        'theme_location' => 'primary_navigation', 
                                        'menu_class' => 'navbar-nav',
                                        'container_class' =>'collapse navbar-collapse',
                                        'container_id' => 'navbarNavAltMarkup'
                                        ]);
                                    !!}
                                @endif
                            </nav>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>  