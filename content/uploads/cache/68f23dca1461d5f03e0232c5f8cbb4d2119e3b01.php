<?php $__env->startSection('content'); ?>
<section id="notfound">
    <div class="not-found">
        <div class="container">
            <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 wow slideInLeft" data-wow-delay="0.5s">
                	<?php if(!have_posts()): ?>
	                    <div class="alert alert-warning">
	                      <?php _e('Sorry, but the page you were trying to view does not exist. You can go back to <a href="/" title="home">Home</a> page here.', 'sage'); ?>
	                    </div>
                    <?php endif; ?>                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>