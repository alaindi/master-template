<?php $__env->startSection('content'); ?>
<section id="blog">
    <div class="container">
        <div class="blog-content">
            <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">                
                <div class="col-md-8 col-sm-12">
                    <div class="blogpost-wrap">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>          
                          <?php endwhile; ?> 
                    </div>                             
                </div>                
                <div class="col-md-4 col-sm-12 wow slideInRight" data-wow-delay="0.5s">
                    <?php echo $__env->make('blogsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>