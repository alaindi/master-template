<?php $__env->startSection('content'); ?>
<section id="blog">
    <div class="container">
        <div class="blog-content">
            <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12" data-aos="zoom-in-down"                     
                     data-aos-easing="ease-in-sine">
                    <div class="blogpost-wrap">
                        <?php if(!have_posts()): ?>
                          <div class="alert alert-warning">
                            <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

                          </div>
                          <?php echo get_search_form(false); ?>

                        <?php endif; ?>

                        <?php while(have_posts()): ?> <?php the_post() ?>
                          <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endwhile; ?>
                        
                        <?php echo get_the_posts_navigation(); ?>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-left"                     
                         data-aos-easing="ease-in-sine">
                    <?php echo $__env->make('blogsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>