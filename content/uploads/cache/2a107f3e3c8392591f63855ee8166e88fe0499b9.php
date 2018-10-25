<?php $__env->startSection('content'); ?>
<style type="text/css">
	header{
		display: none !important;
	}
</style>
<section id="maintenance" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/404.jpg'); min-height: 762px;">
	
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>